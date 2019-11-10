<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationType;
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
     * @Route("/login", name="user_account")
     * @return Response 
     */
    public function login(AuthenticationUtils $auth)
    {
        $error = $auth ->getLastAuthenticationError();
        $name = $auth -> getLastUsername();
        
        return $this->render('user_account/login.html.twig',[
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

    public function register(Request $request, ObjectManager $manager, UserPasswordEncoderInterface $encoder){

        $user = new User();

        $form = $this ->createForm(RegistrationType::class,$user);
        $form -> handleRequest($request);

        if ($form -> isSubmitted() && $form -> isValid()) {

            $hash = $encoder ->encodePassword($user, $user -> getPassword());
            $user -> setPassword($hash);

            $manager -> persist($user);
            $manager -> flush();

            $this->addFlash(
                'notice',
                'To complete the process of creating your account,
                 please activate it with the link send in your email. Thanks...');

            return $this -> redirectToRoute('user_account');
        }
        
        return $this -> render('user_account/registration.html.twig',[
            'form' => $form ->  createView()
        ]);
    }



}
