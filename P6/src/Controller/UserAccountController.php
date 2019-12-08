<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ProfileType;
use App\Entity\UpdatePassword;
use App\Form\RegistrationType;
use App\Form\PasswordUpdateType;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserAccountController extends AbstractController
{

/**
     * @Route("/account/{username}", name="user")
     */
    public function index()
    {
        $user = new User();
        return $this->render('user_account/show.html.twig', [
           'user' => $user
          //'user' => $this ->getUser()
        ]);
    }
   






    /**
     * @Route("/login", name="user_account")
     * @return Response 
     */
    public function login(AuthenticationUtils $auth)
    {
        $error = $auth->getLastAuthenticationError();
        $name = $auth->getLastUsername();

        return $this->render('user_account/login.html.twig', [
            'hasError' => $error !== null,
            'name' => $name
        ]);
    }



    /**
     * @Route("/logout", name="user_account_logout")
     * @return void 
     */
    public function logout()
    {
        //nothing here ...
    }


    /**
     * Display register form 
     * @Route("/register", name = "user_account_register")
     * 
     * @return Response
     */

    public function register(Request $request, ObjectManager $manager, UserPasswordEncoderInterface $encoder)
    {

        $user = new User();

        $form = $this->createForm(RegistrationType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $hash = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($hash);

            $manager->persist($user);
            $manager->flush();

            $this->addFlash(
                'notice',
                'To complete the process of creating your account,
                 please activate it with the link send in your email. Thanks...'
            );

            return $this->redirectToRoute('user_account');
        }

        return $this->render('user_account/registration.html.twig', [
            'form' => $form->createView()
        ]);
    }


    /**
     * Allow to update my profile to update my informations
     * 
     * @Route("/profile", name = " user_profile ")
     *
     * @return Response
     */
    public function profile(Request $request, ObjectManager $manager)
    {

        $user = $this->getUser();
        $form = $this->createForm(ProfileType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($user);
            $manager->flush();

            $this->addFlash(
                'notice',
                'your changes have been supported'
            );
            //return $this -> redirectToRoute('user_account_profile');
        }




        return $this->render('user_account/profile.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/updatepassword", name = " user_account_updatepassword")
     * @return Response
     */

     public function updatePassword(Request $request, UserPasswordEncoderInterface $encoder, ObjectManager $manager){

        $passwordupdate = new UpdatePassword();
        $user = new User();
        $user = $this -> getUser();

        $form = $this -> createForm(PasswordUpdateType::class,$passwordupdate);
        $form -> handleRequest($request);

        if ($form -> isSubmitted() && $form -> isValid()) {
            // Check if the old password is the same that password
            if (!password_verify($passwordupdate -> getOldPassword(), $user -> getPassword())) {
                $form -> get('oldPassword') -> addError( new FormError(" This password isn't actually your password "));
            } else {
                $newPassword = $passwordupdate -> getNewPassword();
                $hash = $encoder -> encodePassword($user, $newPassword);
                $user -> setPassword($hash);

                $manager -> persist($user);
                $manager -> flush();

                $this->addFlash(
                    'notice',
                    'Your password has been changed successfully...'
                );
    
                return $this->redirectToRoute('home');
                
            }
            
        }

        return $this -> render('user_account/updatepassword.html.twig',[
            'form' => $form -> createView()
        ]);
     }

     
    

     

}
