<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ProfileType;
use App\Entity\UpdatePassword;
use App\Form\PasswordUpdateType;
use App\Repository\UserRepository;
//use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Form\FormError;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class UserController extends AbstractController
{
    /**
     * @Route("/user/dashboard", name="show_user")
     * IsGranted("ROLE_USER")
     */
    public function index( UserRepository $repo)
    {
        $user = $this->getUser();
         $userRepository = $this->getDoctrine()->getRepository(User::class);
        $user = $repo->findAll();

        
        return $this->render('user/user.html.twig', [
            //  'user' => $user
            'user' => $this->getUser()

        ]);
    }


    /**
     * Allow to edit my profile
     * 
     * @Route("/user/update/",name ="update_profile")
     * IsGranted("ROLE_USER")
     *
     * 
     */
    public function profile(Request $request, EntityManagerInterface $manager)
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




        return $this->render('user/profil.html.twig', [
            'form' => $form->createView(),
            'user' => $user,
            //'user' => $this ->getUser()
        ]);
    }



    /**
     * @Route("/user/login", name="login_user")
     * @return Response 
     */
    public function login(AuthenticationUtils $auth)
    {
        $error = $auth->getLastAuthenticationError();
        $name = $auth->getLastUsername();

        return $this->render('user/login.html.twig', [
            'hasError' => $error !== null,
            'name' => $name
        ]);

        
    }


    /**
     * @Route("/user/logout", name="logout")
     * @return void 
     */
    public function logout()
    {
        //nothing here ...
    }




 /**
     * @Route("/user/update_password", name = "update_password")
     * @return Response
     */

    public function updatePassword(Request $request, UserPasswordEncoderInterface $encoder, EntityManagerInterface $manager){

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
    
                return $this->redirectToRoute('show_user');
                
            }
            
        }

        return $this -> render('user/updatepassword.html.twig',[
            'form' => $form -> createView()
        ]);
     }
















}
