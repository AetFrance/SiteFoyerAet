<?php

namespace Aet\AnnuaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Aet\AnnuaireBundle\Form\Type\ContactType;
use Aet\AnnuaireBundle\Entity\Contact;
use Aet\AnnuaireBundle\Entity\User;
use Aet\AnnuaireBundle\Helpers\SearchHelper;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Aet\AnnuaireBundle\Form\Type\UserEditType;
use Aet\AnnuaireBundle\Form\Type\AetPageType;
use FOS\UserBundle\Controller\RegistrationController as BaseController;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use ZendSearch\Lucene\Document;
use ZendSearch\Lucene\Document\Field;


class DefaultController extends Controller
{

    private $numberOfUsersPerPage = 10;
    private $aetUserSearchIndexName = "aetuserindex";


    public function indexAction()
    {
        return $this->redirect($this->generateUrl('aet_annuaire_page_view'));
        //return $this->render('AetAnnuaireBundle:Default:index.html.twig');
    }

    public function LoginBisAction()
    {
        $csrfToken = $this->container->get('form.csrf_provider')->generateCsrfToken('authenticate');

        return $this->container->get('templating')->renderResponse('AetAnnuaireBundle:Security:login_content.html.twig', array(
            'last_username' => null,
            'error'         => null,
            'csrf_token'    => $csrfToken
        ));
    }

    public function AetListAction(Request $request)
    {

        // On vérifie que l'utilisateur dispose bien du rôle ROLE_AUTEUR
        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            // Sinon on déclenche une exception « Accès interdit »
            throw new AccessDeniedException('Accès limité aux utilisateurs connectés.');
        }

        $em = $this->getDoctrine()->getManager();
        $paginator  = $this->get('knp_paginator');

        $searchText = array();

        // On crée le FormBuilder grâce au service form factory
        $formBuilder = $this->get('form.factory')->createBuilder('form', $searchText);

        // On ajoute les champs de l'entité que l'on veut à notre formulaire
        $formBuilder
            ->add('searchText',     'text', array('label'=>false, 'required'=>false))
            ->add('search',      'submit')
        ;

        // À partir du formBuilder, on génère le formulaire
        $searchForm = $formBuilder->getForm();

        $searchForm->handleRequest($request);
        if ($searchForm->isValid()) {
            // On l'enregistre notre objet $advert dans la base de données, par exemple


            $searchQueryValue = trim($searchForm["searchText"]->getData());

            if ($searchQueryValue === "")
            {
                return $this->redirect($this->generateUrl('aet_annuaire_aetlist'));
            }

            /*$elasticaManager = $this->container->get('fos_elastica.manager');
            $foundUsers = $elasticaManager->getRepository('AetAnnuaireBundle:User')->AetUserSearch($searchQueryValue);*/

            /*$foundUsers = $em
                ->getRepository('AetAnnuaireBundle:User')
                ->AetUserSearch($searchQueryValue);*/

            $index = $this->get('ivory_lucene_search')->getIndex($this->aetUserSearchIndexName);
            $foundUsers = $this->luceneSearchAetUsers($index,$searchQueryValue);

            $pagination = $paginator->paginate(
                $foundUsers,
                $request->query->get('page', 1),
                $this->numberOfUsersPerPage
            );

            return $this->render('AetAnnuaireBundle:Page:aetlist.html.twig',
                array('pagination' => $pagination, 'searchForm' => $searchForm->createView()));


        }

        $users = $em
            ->getRepository('AetAnnuaireBundle:User')
            ->findAll();

        $pagination = $paginator->paginate(
            $users,
            $request->query->get('page', 1),
            $this->numberOfUsersPerPage
        );

        return $this->render('AetAnnuaireBundle:Page:aetlist.html.twig',
            array('pagination' => $pagination, 'searchForm' => $searchForm->createView()));
    }

    public function ViewAetProfileAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        // On récupère l'annonce $id
        $aet = $em
            ->getRepository('AetAnnuaireBundle:User')
            ->find($id);

        //$comment = new Comment();

        if (null === $aet) {
            throw new NotFoundHttpException("L'utilisateur AET d'id ".$id." n'existe pas.");
        }


        return $this->render('AetAnnuaireBundle:Page:aetprofile.view.html.twig',
            array('aetUser' => $aet
            ));
    }

    public function EditAetProfileAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $user = $this->get('security.context')->getToken()->getUser();
        $connectedUserId = $user->getId();


        // On vérifie que l'utilisateur dispose bien du rôle ROLE_AUTEUR
        if ($connectedUserId != $id) {
            // Sinon on déclenche une exception « Accès interdit »
            throw new AccessDeniedException('Vous n\'avez pas le droit d\'éditer ce profil.');
        }
        $aetEntity = $em->getRepository('AetAnnuaireBundle:User')->find($id);

        $form = $this->createForm(new UserEditType(), $aetEntity);

        $form->handleRequest($request);

        if ($request->getMethod() === 'POST')
        {

            if ($form->isValid()) {
                $em->persist($aetEntity);
                $em->flush();

                //Reindex the user for search
                $index = $this->get('ivory_lucene_search')->getIndex($this->aetUserSearchIndexName);

                //Update the search index
                $dbIdTerm = new \ZendSearch\Lucene\Index\Term($aetEntity->getId(), 'dbId');
                $dbIdSubQuery = new \ZendSearch\Lucene\Search\Query\Term($dbIdTerm);

                $foundDocuments = $index->find($dbIdSubQuery);
                //$docNum = count($foundDocuments);
                foreach ($foundDocuments as $foundDoc)
                {
                    $index->delete($foundDoc->id);
                }

                $this->addAetUserToSearchIndex($index,$aetEntity);

                return $this->redirect($this->generateUrl('aet_annuaire_aetprofile_view',array('id'=>$id)));
            }

            $em->refresh($user); // Add this line
        }

        return $this->render('AetAnnuaireBundle:Page:aetprofile.edit.html.twig', array(
            'aetUser'      => $aetEntity,
            'form'   => $form->createView(),
        ));
    }

#Page de contact de l'association des Aet
    public function contactAction(Request $request)
    {
        $contact=new Contact();
        $form = $this->createForm(new ContactType(), $contact);
        $form->handleRequest($request);

        if ($form->isValid()) {
            // fait quelque chose comme sauvegarder la tâche dans la bdd
// fait quelque chose comme sauvegarder la tâche dans la bdd
            $message = \Swift_Message::newInstance()
                ->setSubject($contact->getSubject())
                ->setFrom($contact->getEmail())
                ->setTo($this->container->getParameter('aet_annuaire.emails.contact_email'))
                ->setBody($this->renderView('AetAnnuaireBundle:Page:contactEmail.txt.twig', array('contact' => $contact)));

            $this->get('mailer')->send($message);

            $this->get('session')->getFlashBag()->add('blogger-notice', 'Your contact enquiry was successfully sent. Thank you!');

            return $this->redirect($this->generateUrl('aet_annuaire_contact'));
        }

        return $this->render('AetAnnuaireBundle:Page:contact.html.twig',array(
            'form' => $form->createView()
        ));
    }

    public function registerAction(Request $request)
    {
        $mail='a.moctarsidibe@gmail.com';
        $form = $this->container->get('fos_user.registration.form');
        $formHandler = $this->container->get('fos_user.registration.form.handler');
        $confirmationEnabled = $this->container->getParameter('fos_user.registration.confirmation.enabled');

        $process = $formHandler->process($confirmationEnabled);
        if ($process) {
            $user = $form->getData();

            /*****************************************************
             * Add new functionality (e.g. log the registration) *
             *****************************************************/
            $this->container->get('logger')->info(
                sprintf('New user registration: %s', $user)
            );

            if ($confirmationEnabled) {
               $this->container->get('session')->set('fos_user_send_confirmation_email/email', $user->getEmail());

                $route = 'fos_user_registration_check_email';
            } else {
                $this->authenticateUser($user);
                $route = 'fos_user_registration_confirmed';
                //Index user entity for search
                $index = $this->get('ivory_lucene_search')->getIndex($this->aetUserSearchIndexName);
                $this->addAetUserToSearchIndex($index,$user);
            }

            $this->setFlash('fos_user_success', 'registration.flash.user_created');
            $url = $this->container->get('router')->generate($route);

            return new RedirectResponse($url);
        }

        return $this->container->get('templating')->renderResponse('AetAnnuaireBundle:Registration:register.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function PageViewAction($urlId, Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        // On récupère l'annonce $id
        $aetPage = $em
            ->getRepository('AetAnnuaireBundle:AetPage')
            ->findOneByUrlId($urlId);

        //$comment = new Comment();

        if (null === $aetPage) {
            throw new NotFoundHttpException("La page d'url ".$urlId." n'existe pas.");
        }

        return $this->render('AetAnnuaireBundle:Page:aetpage.view.html.twig',
            array('AetPage' => $aetPage

            ));

    }

    public function PageEditAction($urlId, Request $request)
    {
        // On vérifie que l'utilisateur dispose bien du rôle ROLE_AUTEUR
        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            // Sinon on déclenche une exception « Accès interdit »
            throw new AccessDeniedException('Accès limité aux utilisateurs connectés.');
        }

        // On l'enregistre notre objet $advert dans la base de données, par exemple
        $em = $this->getDoctrine()->getManager();


        $aetPage = $em->getRepository('AetAnnuaireBundle:AetPage')
                            ->findOneByUrlId($urlId);

        $authorizationChecker = $this->get('security.context');

        // check for edit access
        if (false === $authorizationChecker->isGranted('ROLE_ADMIN')) {
            throw new AccessDeniedException('Vous n\'avez pas la permission d\'éditer cette page');
        }

        // À partir du formBuilder, on génère le formulaire
        //$form = $formBuilder->getForm();
        $form = $this->createForm(new AetPageType(), $aetPage);

        // On fait le lien Requête <-> Formulaire
        // À partir de maintenant, la variable $advert contient les valeurs entrées dans le formulaire par le visiteur
        $form->handleRequest($request);

        // On vérifie que les valeurs entrées sont correctes
        // (Nous verrons la validation des objets en détail dans le prochain chapitre)
        if ($form->isValid()) {

            //We modify the 'alt' attribute to make sure that the "PreUpdate" event is fired in the "Image" Entity
            //$communication->getImage()->setAlt("forUpdate");

            $em->persist($aetPage);

            $em->flush();

            //$request->getSession()->getFlashBag()->add('notice', 'Communication bien enregistrée.');

            // On redirige vers la page de visualisation de l'annonce nouvellement créée
            return $this->redirect($this->generateUrl('aet_annuaire_page_view', array('urlId' => $aetPage->getUrlId())));
        }

        // Si on n'est pas en POST, alors on affiche le formulaire
        return $this->render('AetAnnuaireBundle:Page:aetpage.edit.html.twig', array('AetPage'=>$aetPage, 'form' => $form->createView()));
    }

    public function eraseAetUserIndexAction()
    {
        // On vérifie que l'utilisateur dispose bien du rôle ROLE_ADMIN
        if (!$this->get('security.context')->isGranted('ROLE_ADMIN')) {
            // Sinon on déclenche une exception « Accès interdit »
            throw new AccessDeniedException('Accès limité aux ADMINISTRATEURS.');
        }

        $luceneSearch = $this->get('ivory_lucene_search');
        $luceneSearch->eraseIndex($this->aetUserSearchIndexName);

        return $this->redirect($this->generateUrl('aet_annuaire_aetlist'));
    }

    public function indexAetUsersAction()
    {
        // On vérifie que l'utilisateur dispose bien du rôle ROLE_ADMIN
        if (!$this->get('security.context')->isGranted('ROLE_ADMIN')) {
            // Sinon on déclenche une exception « Accès interdit »
            throw new AccessDeniedException('Accès limité aux ADMINISTRATEURS.');
        }

        $em = $this->getDoctrine()->getManager();
        // Ici, on récupérera la liste des annonces, puis on la passera au template
        // Notre liste d'annonce en dur listAdverts
        $listAetUserss = $em
            ->getRepository('AetAnnuaireBundle:User')
            ->findAll()
        ;
        $index = $this->get('ivory_lucene_search')->getIndex($this->aetUserSearchIndexName);

        foreach ($listAetUserss as $aetUser)
        {
            $this->addAetUserToSearchIndex($index,$aetUser);
        }

        return $this->redirect($this->generateUrl('aet_annuaire_aetlist'));

    }

    public function addAetUserToSearchIndex($index, User $aetUser)
    {
        // Create a new document
        $document = new Document();

        $document->addField(Field::keyword('dbId', $aetUser->getId(),'utf-8'));
        $document->addField(Field::unStored('firstname', $aetUser->getFirstname(), 'utf-8'));
        $document->addField(Field::unStored('lastname', $aetUser->getLastname(), 'utf-8'));
        $document->addField(Field::unStored('activiteprincipale', $aetUser->getActivitePrincipale(), 'utf-8'));
        $document->addField(Field::unStored('codepostal', $aetUser->getCodePostale(), 'utf-8'));
        $document->addField(Field::unStored('email', $aetUser->getEmail(), 'utf-8'));
        $document->addField(Field::unStored('matricule', $aetUser->getMatricule(), 'utf-8'));
        $document->addField(Field::unStored('pays', $aetUser->getPays(), 'utf-8'));
        $document->addField(Field::unStored('promotion', strval($aetUser->getPromotion()->format("Y")), 'utf-8'));
        $document->addField(Field::unStored('telephone', strval($aetUser->getTelephone()), 'utf-8'));
        $document->addField(Field::unStored('ville', $aetUser->getVille(), 'utf-8'));
        $document->addField(Field::unStored('whoami', $aetUser->getWhoami(), 'utf-8'));

        // Add your document to the index
        $index->addDocument($document);

        // Commit your change
        $index->commit();

        $index->optimize();
    }

    public function luceneSearchAetUsers($index, $searchKeyWord)
    {
        $dbIds = Array();
        $searchValue = SearchHelper::utf8_to_ascii( mb_strtolower($searchKeyWord, "UTF-8"));
        $em = $this->getDoctrine()->getManager();

        $term1 = new \ZendSearch\Lucene\Index\Term($searchValue, 'firstname');
        //$subquery1 = new \ZendSearch\Lucene\Search\Query\Term($term1);

        $term2 = new \ZendSearch\Lucene\Index\Term($searchValue, 'lastname');
        //$subquery2 = new \ZendSearch\Lucene\Search\Query\Term($term2);

        $term3 = new \ZendSearch\Lucene\Index\Term($searchValue, 'activiteprincipale');
        //$subquery3 = new \ZendSearch\Lucene\Search\Query\Term($term3);

        $term4 = new \ZendSearch\Lucene\Index\Term($searchValue, 'codepostal');
        //$subquery4 = new \ZendSearch\Lucene\Search\Query\Term($term4);

        $term5 = new \ZendSearch\Lucene\Index\Term($searchValue, 'email');
        //$subquery5 = new \ZendSearch\Lucene\Search\Query\Term($term5);

        $term6 = new \ZendSearch\Lucene\Index\Term($searchValue, 'matricule');
        //$subquery6 = new \ZendSearch\Lucene\Search\Query\Term($term6);

        $term7 = new \ZendSearch\Lucene\Index\Term($searchValue, 'pays');
        //$subquery7 = new \ZendSearch\Lucene\Search\Query\Term($term7);

        $term8 = new \ZendSearch\Lucene\Index\Term($searchValue, 'promotion');
        //$subquery8 = new \ZendSearch\Lucene\Search\Query\Term($term8);

        $term9 = new \ZendSearch\Lucene\Index\Term($searchValue, 'telephone');
        //$subquery9 = new \ZendSearch\Lucene\Search\Query\Term($term9);

        $term10 = new \ZendSearch\Lucene\Index\Term($searchValue, 'ville');
        //$subquery10 = new \ZendSearch\Lucene\Search\Query\Term($term10);

        $term11 = new \ZendSearch\Lucene\Index\Term($searchValue, 'whoami');
        //$subquery11 = new \ZendSearch\Lucene\Search\Query\Term($term11);


        //$subqueries = array($subquery1, $subquery2, $subquery3, $subquery4, $subquery5, $subquery6, $subquery7, $subquery8, $subquery9, $subquery10, $subquery11);
        $terms = array($term1, $term2, $term3, $term4, $term5, $term6, $term7, $term8, $term9, $term10, $term11);
        $signs = array(null, null, null, null, null, null, null, null, null, null, null);

        $termsQuery = new \ZendSearch\Lucene\Search\Query\MultiTerm($terms, $signs);
        //$boolQuery = new \ZendSearch\Lucene\Search\Query\Boolean($subqueries, $signs);

        $foundDocuments = $index->find($termsQuery);
        //$docNum = count($foundDocuments);
        foreach ($foundDocuments as $foundDoc)
        {
            $dbIds[] = $foundDoc->dbId;
        }

        $results = $em->getRepository('AetAnnuaireBundle:User')->findById($dbIds);

        return $results;
    }

}
