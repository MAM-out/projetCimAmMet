<?php

namespace App\Controller;

use App\Entity\Users;
use App\Form\RegistrationType;
use Doctrine\ORM\EntityManagerInterface; // MAJ depuis la V4.4 !! use Doctrine\Persistence\ObjectManager;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;



class SecurityController extends AbstractController
{

    /**
     * @Route("/inscription", name="security_registration")
     */
    public function registration(Request $request, EntityManagerInterface $manager, UserPasswordEncoderInterface $encoder) //
    {
        $user = new Users();

        $form = $this->createForm(RegistrationType::class, $user);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $hash = $encoder->encodePassword($user, $user->getPassword());
            
            $user->setPassword($hash);

            $manager->persist($user);
            $manager->flush();

          // si l'on souhaite rediriger   return $this->redirectToRoute('security_login');
        }

        $users= $this->getDoctrine()->getRepository(Users::class)->findAll();


        return $this->render('/security/registration.html.twig', [
            'form' => $form->createView(),
            'users'=> $users
        ]);
    }

 
    /**
     * @Route("/connexion", name="security_login")
     */
    public function login()
    {
        return $this->render('/security/login.html.twig');
    }

    /**
    * @Route("/verif-utilisateurs", name="verif_utilisateurs")
    */
    public function usager_lire()
    {
        // récupérer tous les utilisateurs de la table usagers de la BD
        // et les mettre dans le tableau $users 

    $users= $this->getDoctrine()->getRepository(Users::class)->findAll();

    return $this->render('/security/lire-table-users.html.twig',
                        ['users'=> $users]);

    }
 
}
