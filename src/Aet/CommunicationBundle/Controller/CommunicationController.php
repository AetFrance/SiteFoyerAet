<?php
/**
 * Created by PhpStorm.
 * User: JRMD
 * Date: 04/03/2015
 * Time: 22:07
 */

namespace Aet\CommunicationBundle\Controller;

use Aet\CommunicationBundle\Entity\Comment;
use Aet\CommunicationBundle\Entity\Communication;
use Aet\CommunicationBundle\Form\CommentType;
use Aet\CommunicationBundle\Form\CommunicationEditType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception;
use Aet\CommunicationBundle\Form\CommunicationType;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Acl\Domain\ObjectIdentity;
use Symfony\Component\Security\Acl\Domain\UserSecurityIdentity;
use Symfony\Component\Security\Acl\Permission\MaskBuilder;

use Aet\AnnuaireBundle\Helpers\SearchHelper;

use ZendSearch\Lucene\Document;
use ZendSearch\Lucene\Document\Field;

class CommunicationController extends Controller {

    private $numberOfCommunicationsPerPage =10;
    private $aetCommunicationSearchIndexName = "aetcommunicationindex";

    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $paginator  = $this->get('knp_paginator');

        $communications = $em
            ->getRepository('AetCommunicationBundle:Communication')
            ->findAll();

        $pagination = $paginator->paginate(
            $communications,
            $request->query->get('page', 1),
            $this->numberOfCommunicationsPerPage
        );

        return $this->render('AetCommunicationBundle:Communication:index.html.twig',
            array('pagination' => $pagination));
    }

    public function categoriesIndexAction($categories, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $paginator  = $this->get('knp_paginator');

        $fakeCommunication = new Communication();

        $selectedCategoryIds = (array) null;

        $categoriesUrlParam = "";

        $form = $this->get('form.factory')->createBuilder('form', $fakeCommunication)
            ->add('categories','entity', array(
                'class'    => 'AetCommunicationBundle:Category',
                'property' => 'name',
                'multiple' => true,
                'expanded' => true
            ))
            ->add('Filtrer',  'submit')
            ->getForm()
        ;

        $form->handleRequest($request);

        // On vérifie que les valeurs entrées sont correctes
        // (Nous verrons la validation des objets en détail dans le prochain chapitre)
        if ($form->isValid()) {

            if(count($fakeCommunication->getCategories()) > 0) {

                foreach ($fakeCommunication->getCategories() as $selectedCategory) {
                    if ($categoriesUrlParam == "")
                    {
                        $categoriesUrlParam = strval($selectedCategory->getId())."";
                    }
                    else
                    {
                        $categoriesUrlParam = $categoriesUrlParam."c".strval($selectedCategory->getId());
                    }
                }
            }
            else
            {
                $categoriesUrlParam = "none";
            }

            return $this->redirect($this->generateUrl('aet_annuaire_communication_categories_index',array('categories'=>$categoriesUrlParam)));
        }

        if ($categories == "none")
        {
            $communications = $em
                ->getRepository('AetCommunicationBundle:Communication')
                ->findAll();

            $pagination = $paginator->paginate(
                $communications,
                $request->query->get('page', 1),
                $this->numberOfCommunicationsPerPage
            );

        }
        else
        {
            //Get the category ids
            $categoryIdStrings = explode('c',$categories);

            foreach ($categoryIdStrings as &$selectedCategoryStr) {

                $selectedCategoryIds[] = intval($selectedCategoryStr);
            }

            $communications = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('AetCommunicationBundle:Communication')
                ->getCommunicationsWithCategories($selectedCategoryIds);


            $pagination = $paginator->paginate(
                $communications,
                $request->query->get('page', 1),
                $this->numberOfCommunicationsPerPage
            );
        }



        return $this->render('AetCommunicationBundle:Communication:categoriesindex.html.twig',
            array('pagination' => $pagination,
                'form' =>$form->createView())
        );

    }

    public function viewAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        // On récupère l'annonce $id
        $communication = $em
            ->getRepository('AetCommunicationBundle:Communication')
            ->find($id);

        //$comment = new Comment();

        if (null === $communication) {
            throw new NotFoundHttpException("La communication d'id ".$id." n'existe pas.");
        }



        $threadId = $communication->getThread();

        return $this->render('AetCommunicationBundle:Communication:view.html.twig',
                            array('communication' => $communication,
                                'threadId'=> $threadId,

                                    ));
    }

    public function addAction(Request $request)
    {
        // On vérifie que l'utilisateur dispose bien du rôle ROLE_AUTEUR
        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            // Sinon on déclenche une exception « Accès interdit »
            throw new AccessDeniedException('Accès limité aux utilisateurs connectés.');
        }

        // Création de l'entité Advert
        $communication = new Communication();
        $communicationEditMode = false;

        // À partir du formBuilder, on génère le formulaire
        //$form = $formBuilder->getForm();
        $form = $this->createForm(new CommunicationType(), $communication);

        // On fait le lien Requête <-> Formulaire
        // À partir de maintenant, la variable $advert contient les valeurs entrées dans le formulaire par le visiteur
        $form->handleRequest($request);

        // On vérifie que les valeurs entrées sont correctes
        // (Nous verrons la validation des objets en détail dans le prochain chapitre)
        if ($form->isValid()) {


            // On l'enregistre notre objet $advert dans la base de données, par exemple
            $em = $this->getDoctrine()->getManager();
           /* $user = $em
                ->getRepository('AetAnnuaireBundle:User')
                ->find(1);*/
            // On récupère le service
            $security = $this->container->get('security.context');

            // On récupère le token
            $token = $security->getToken();

            // Si la requête courante n'est pas derrière un pare-feu, $token est null

            // Sinon, on récupère l'utilisateur
            $user = $token->getUser();

            // Si l'utilisateur courant est anonyme, $user vaut « anon. »

            // Sinon, c'est une instance de notre entité User, on peut l'utiliser normalement

            $communication->setUser($user);
            $communication->setThread("CommunicationCommentThread");
            $em->persist($communication);

            $em->flush();

            $communicationId = $communication->getId();
            $communication->setThread("CommunicationCommentThread_$communicationId");
            $em->flush();

            // creating the ACL
            $aclProvider = $this->get('security.acl.provider');
            $objectIdentity = ObjectIdentity::fromDomainObject($communication);
            $acl = $aclProvider->createAcl($objectIdentity);

            // retrieving the security identity of the currently logged-in user
            //$tokenStorage = $this->get('security.token_storage');
            //$user = $tokenStorage->getToken()->getUser();
            $securityIdentity = UserSecurityIdentity::fromAccount($user);

            // grant owner access
            $acl->insertObjectAce($securityIdentity, MaskBuilder::MASK_OWNER);
            $aclProvider->updateAcl($acl);

            //Index for the search
            $index = $this->get('ivory_lucene_search')->getIndex($this->aetCommunicationSearchIndexName);
            $this->addAetCommunicationToSearchIndex($index,$communication);

            //$request->getSession()->getFlashBag()->add('notice', 'Communication bien enregistrée.');

            // On redirige vers la page de visualisation de l'annonce nouvellement créée
            return $this->redirect($this->generateUrl('aet_annuaire_communication_view', array('id' => $communication->getId())));
        }


        // Si on n'est pas en POST, alors on affiche le formulaire
        return $this->render('AetCommunicationBundle:Communication:add.html.twig', array('communication'=>$communication, 'form' => $form->createView(), 'communicationEditMode' => $communicationEditMode));

    }

    public function editAction($id, Request $request)
    {
        // On vérifie que l'utilisateur dispose bien du rôle ROLE_AUTEUR
        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            // Sinon on déclenche une exception « Accès interdit »
            throw new AccessDeniedException('Accès limité aux utilisateurs connectés.');
        }

        // On l'enregistre notre objet $advert dans la base de données, par exemple
        $em = $this->getDoctrine()->getManager();

        $communicationEditMode = true;

        $communication = $em->getRepository('AetCommunicationBundle:Communication')->find($id);

        $authorizationChecker = $this->get('security.context');

        // check for edit access
        if (false === $authorizationChecker->isGranted('EDIT', $communication) && false === $authorizationChecker->isGranted('ROLE_ADMIN')) {
            throw new AccessDeniedException('Vous n\'avez pas la permission d\'éditer cette communication');
        }

        // À partir du formBuilder, on génère le formulaire
        //$form = $formBuilder->getForm();
        $form = $this->createForm(new CommunicationEditType(), $communication);

        // On fait le lien Requête <-> Formulaire
        // À partir de maintenant, la variable $advert contient les valeurs entrées dans le formulaire par le visiteur
        $form->handleRequest($request);

        // On vérifie que les valeurs entrées sont correctes
        // (Nous verrons la validation des objets en détail dans le prochain chapitre)
        if ($form->isValid()) {

            //We modify the 'alt' attribute to make sure that the "PreUpdate" event is fired in the "Image" Entity
            //$communication->getImage()->setAlt("forUpdate");

            $em->persist($communication);

            $em->flush();

            //Reindex the communication for search
            $index = $this->get('ivory_lucene_search')->getIndex($this->aetCommunicationSearchIndexName);

            //Update the search index
            $dbIdTerm = new \ZendSearch\Lucene\Index\Term($communication->getId(), 'dbId');
            $dbIdSubQuery = new \ZendSearch\Lucene\Search\Query\Term($dbIdTerm);

            $foundDocuments = $index->find($dbIdSubQuery);
            //$docNum = count($foundDocuments);
            foreach ($foundDocuments as $foundDoc)
            {
                $index->delete($foundDoc->id);
            }

            $this->addAetCommunicationToSearchIndex($index,$communication);

            //$request->getSession()->getFlashBag()->add('notice', 'Communication bien enregistrée.');

            // On redirige vers la page de visualisation de l'annonce nouvellement créée
            return $this->redirect($this->generateUrl('aet_annuaire_communication_view', array('id' => $communication->getId())));
        }

        // Si on n'est pas en POST, alors on affiche le formulaire
        return $this->render('AetCommunicationBundle:Communication:edit.html.twig', array('communication'=>$communication, 'form' => $form->createView(), 'communicationEditMode' => $communicationEditMode));

    }

    public function deleteAction($id, Request $request)
    {
        if(!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED'))
        {
            throw new AccessDeniedException('Accès limité aux utilisateurs connectés.');
        }
        $idToBeDeleted = $id;

        $em = $this->getDoctrine()->getManager();
        // On récupère l'annonce $id
        $communication = $em
            ->getRepository('AetCommunicationBundle:Communication')
            ->find($id);

        $authorizationChecker = $this->get('security.context');

        // check for edit access
        if (false === $authorizationChecker->isGranted('EDIT', $communication) && false === $authorizationChecker->isGranted('ROLE_ADMIN')) {
            throw new AccessDeniedException('Vous n\'avez pas la permission de supprimer cette communication');
        }

        $aclProvider = $this->get('security.acl.provider');
        $objectIdentity = ObjectIdentity::fromDomainObject($communication);
        $acl = $aclProvider->findAcl($objectIdentity);

        $communicationThread = $em
            ->getRepository('AetCommunicationBundle:Thread')
            ->find($communication->getThread());

        if (null === $communication) {
            throw new NotFoundHttpException("La communication d'id ".$id." n'existe pas.");
        }


        $form = $this->createFormBuilder()->getForm();

        if ($form->handleRequest($request)->isValid()) {
            $aces = $acl->getObjectAces();
            foreach($aces as $i => $ace) {

                    // Got it! Let's remove it!
                    $acl->deleteObjectAce($i);

            }
            $aclProvider->updateAcl($acl);
            $aclProvider->deleteAcl($objectIdentity);
            $em->remove($communication);
            $em->remove($communicationThread);
            $em->flush();

            //Remove the communication from search index
            $index = $this->get('ivory_lucene_search')->getIndex($this->aetCommunicationSearchIndexName);

            //Update the search index
            $dbIdTerm = new \ZendSearch\Lucene\Index\Term($communication->getId(), 'dbId');
            $dbIdSubQuery = new \ZendSearch\Lucene\Search\Query\Term($dbIdTerm);

            $foundDocuments = $index->find($dbIdSubQuery);
            //$docNum = count($foundDocuments);
            foreach ($foundDocuments as $foundDoc)
            {
                $index->delete($foundDoc->id);
            }

            return $this->redirect($this->generateUrl('aet_annuaire_communication_index'));
        }




        return $this->render('AetCommunicationBundle:Communication:delete.html.twig',
            array('communication' => $communication,
                'form'   => $form->createView()
            )
            );


    }

    public function communicationSearchAction(Request $request)
    {

        //$em = $this->getDoctrine()->getManager();
        $paginator  = $this->get('knp_paginator');


        $searchText = array();

        // On crée le FormBuilder grâce au service form factory
        $formBuilder = $this->get('form.factory')->createBuilder('form', $searchText);

        // On ajoute les champs de l'entité que l'on veut à notre formulaire
        $formBuilder
            ->add('searchText',     'text', array('label'=>false, 'required'=>false))
            ->add('search',      'submit')
            ->setAction($this->generateUrl('aet_annuaire_communication_search'))
        ;

        // À partir du formBuilder, on génère le formulaire
        $searchForm = $formBuilder->getForm();

        $searchForm->handleRequest($request);
        if ($searchForm->isValid())
        {
            // On l'enregistre notre objet $advert dans la base de données, par exemple


            $searchQueryValue = trim($searchForm["searchText"]->getData());

            if ($searchQueryValue === "")
            {
                return $this->redirect($this->generateUrl('aet_annuaire_communication_index'));
            }


            /*
            $elasticaManager = $this->container->get('fos_elastica.manager');
            $foundCommunications = $elasticaManager->getRepository('AetCommunicationBundle:Communication')->AetCommunicationSearch($searchQueryValue);
            */

            /*$foundUsers = $em
                ->getRepository('AetAnnuaireBundle:User')
                ->AetUserSearch($searchQueryValue);*/

            //$foundUsers = $this->AetUserSearch($searchQueryValue);

            $index = $this->get('ivory_lucene_search')->getIndex($this->aetCommunicationSearchIndexName);
            $foundCommunications = $this->luceneSearchAetCommunications($index,$searchQueryValue);

            $pagination = $paginator->paginate(
                $foundCommunications,
                $request->query->get('page', 1),
                10
            );

            return $this->render('AetCommunicationBundle:Communication:index.html.twig',
                array('pagination' => $pagination));


        }


        return $this->render('AetCommunicationBundle:Communication:searchBox.html.twig',
            array( 'searchForm' => $searchForm->createView()));
    }

    public function eraseAetCommunicationIndexAction()
    {
        // On vérifie que l'utilisateur dispose bien du rôle ROLE_ADMIN
        if (!$this->get('security.context')->isGranted('ROLE_ADMIN')) {
            // Sinon on déclenche une exception « Accès interdit »
            throw new AccessDeniedException('Accès limité aux ADMINISTRATEURS.');
        }

        $luceneSearch = $this->get('ivory_lucene_search');
        $luceneSearch->eraseIndex($this->aetCommunicationSearchIndexName);

        return $this->redirect($this->generateUrl('aet_annuaire_communication_index'));
    }

    public function indexAetCommunicationsAction()
    {
        // On vérifie que l'utilisateur dispose bien du rôle ROLE_ADMIN
        if (!$this->get('security.context')->isGranted('ROLE_ADMIN')) {
            // Sinon on déclenche une exception « Accès interdit »
            throw new AccessDeniedException('Accès limité aux ADMINISTRATEURS.');
        }

        $em = $this->getDoctrine()->getManager();
        // Ici, on récupérera la liste des annonces, puis on la passera au template
        // Notre liste d'annonce en dur listAdverts
        $listAetCommunications = $em
            ->getRepository('AetCommunicationBundle:Communication')
            ->findAll()
        ;
        $index = $this->get('ivory_lucene_search')->getIndex($this->aetCommunicationSearchIndexName);

        foreach ($listAetCommunications as $aetCommunication)
        {
            $this->addAetCommunicationToSearchIndex($index,$aetCommunication);
        }

        return $this->redirect($this->generateUrl('aet_annuaire_communication_index'));

    }

    public function addAetCommunicationToSearchIndex($index, Communication $aetCommunication)
    {
        // Create a new document
        $document = new Document();

        $document->addField(Field::keyword('dbId', $aetCommunication->getId(),'utf-8'));
        $document->addField(Field::unStored('title', $aetCommunication->getTitle(), 'utf-8'));
        $document->addField(Field::unStored('shortdesc', $aetCommunication->getShortDesc(), 'utf-8'));
        $document->addField(Field::unStored('body',  html_entity_decode(strip_tags($aetCommunication->getBody()),ENT_SUBSTITUTE, 'UTF-8') , 'utf-8'));
        $document->addField(Field::unStored('author', $aetCommunication->getUser()->getFirstname()." ".$aetCommunication->getUser()->getLastname(), 'utf-8'));

        // Add your document to the index
        $index->addDocument($document);

        // Commit your change
        $index->commit();

        $index->optimize();
    }

    public function luceneSearchAetCommunications($index, $searchKeyWord)
    {
        $dbIds = Array();
        $searchValue = SearchHelper::utf8_to_ascii( mb_strtolower($searchKeyWord, "UTF-8"));
        $em = $this->getDoctrine()->getManager();

        $term1 = new \ZendSearch\Lucene\Index\Term($searchValue, 'firstname');
        //$subquery1 = new \ZendSearch\Lucene\Search\Query\Term($term1);

        $term2 = new \ZendSearch\Lucene\Index\Term($searchValue, 'title');
        //$subquery2 = new \ZendSearch\Lucene\Search\Query\Term($term2);

        $term3 = new \ZendSearch\Lucene\Index\Term($searchValue, 'shortdesc');
        //$subquery3 = new \ZendSearch\Lucene\Search\Query\Term($term3);

        $term4 = new \ZendSearch\Lucene\Index\Term($searchValue, 'body');
        //$subquery4 = new \ZendSearch\Lucene\Search\Query\Term($term4);

        $term5 = new \ZendSearch\Lucene\Index\Term($searchValue, 'author');
        //$subquery5 = new \ZendSearch\Lucene\Search\Query\Term($term5);


        $terms = array($term1, $term2, $term3, $term4, $term5);
        //$subqueries = array($subquery1, $subquery2, $subquery3, $subquery4, $subquery5);
        $signs = array(null, null, null, null, null);

        $termsQuery = new \ZendSearch\Lucene\Search\Query\MultiTerm($terms,$signs);

        //$boolQuery = new \ZendSearch\Lucene\Search\Query\Boolean($subqueries, $signs);

        $foundDocuments = $index->find($termsQuery);
        //$docNum = count($foundDocuments);
        foreach ($foundDocuments as $foundDoc)
        {
            $dbIds[] = $foundDoc->dbId;
        }

        $results = $em->getRepository('AetCommunicationBundle:Communication')->findById($dbIds);

        return $results;
    }
}