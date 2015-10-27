<?php

/**

 * Created by PhpStorm.

 * User: Moctar

 * Date: 13/02/2015

 * Time: 00:12

 */

// src/Aet/AnnuaireBundle/DataFixtures/ORM/Users.php



namespace Aet\AnnuaireBundle\DataFixtures\ORM;



use Aet\AnnuaireBundle\Entity\AetPage;

use Doctrine\Common\DataFixtures\FixtureInterface;

use Doctrine\Common\Persistence\ObjectManager;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;

use Symfony\Component\DependencyInjection\ContainerInterface;

use Aet\AnnuaireBundle\Entity\User;

use Aet\CommunicationBundle\Entity\Category;



class AnnuaireFixtures implements FixtureInterface, ContainerAwareInterface

{



	private $container ;



    public function setContainer(ContainerInterface $container = null)

    {

        $this->container = $container;

    }

    public function load(ObjectManager $manager)

    {



        	 $userManager = $this->container->get('fos_user.user_manager');

            // Les noms d'utilisateurs à créer

            $noms = array('aetpms1');

            $matricules = array(99001);

            $villes = array('Conflans');

            $codesPostaux = array(78000);

            $userRoles = array('ROLE_SUPER_ADMIN');



            $categories = array('Anecdotes', 'Retours d\'expérience', 'Conseils','Divers');



            foreach ($noms as $i => $nom) {

                // On crée l'utilisateur

                //$users[$i] = new User();



                // Le nom d'utilisateur et le mot de passe sont identiques

              /*  $users[$i]->setUsername($nom);

                $users[$i]->setPassword($nom);

                $users[$i]->setEmail($nom.'@domain.com');

                $users[$i]->setEnabled(true);

                // Le sel et les rôles sont vides pour l'instant

                //$users[$i]->setSalt('');

                $users[$i]->setRoles(array($userRoles[$i]));



                // On le persiste

                $manager->persist($users[$i]);*/







            // Create our user and set details

            $user = $userManager->createUser();

            $user->setUsername($nom);

			$user->setFirstName($nom);

			$user->setLastname($nom);

            $user->setEmail($nom.'@domain.com');

                $user->setMatricule('99031');

            //$user->setPlainPassword($nom);

            $user->setPlainPassword($nom);

            //$user->setPassword('3NCRYPT3D-V3R51ON');  

            $user->setEnabled(true);

            $user->setRoles(array($userRoles[$i]));

			$user->setMatricule($matricules[$i]);

			$user->setVille($villes[$i]);

			$user->setCodePostale($codesPostaux[$i]);

			$user->setTelephone(06330377);

			$user->setWhoami('Lorem ipsum dolor sit amet, alii sumo suscipiantur vim ne, possit timeam electram eu has. No suas utroque qui. Erat autem aeterno has ad. Vel clita omnes nominavi et, no quas iusto cetero pro, no nec eros menandri mediocrem. ');

			$user->setApartmentSearch(false);

			$user->setJobSearch(false);

                $user->setPromotion(new \Datetime('now'));

                $user->setPays('Senegal');

			//$user->setDateNaissance(new \Datetime('now'));

			



            //Update the user

            $userManager->updateUser($user, true);

        }



       // $manager->flush();



     /*   foreach ($categories as $i => $category) {

            // On crée l'utilisateur

             $categoryEnts[$i] = new Category();



             // Le nom d'utilisateur et le mot de passe sont identiques

            $categoryEnts[$i]->setName($category);

             $users[$i]->setPassword($nom);



             // Le sel et les rôles sont vides pour l'instant

             $users[$i]->setSalt('');

             $users[$i]->setRoles(array('ROLE_ADMIN'));



             // On le persiste

           $manager->persist($categoryEnts[$i]);









        }*/



        // On déclenche l'enregistrement

      //  $manager->flush();

        //$manager->flush();



        $aetPageEntity = new AetPage();



        $aetPageEntity->setTitle('Accueil');

        $aetPageEntity->setUrlId('accueil');

        $aetPageEntity->setContent('Contenu page accueil');



        $manager->persist($aetPageEntity);

        $manager->flush();





        //Ajouter une catégorie



    }

}