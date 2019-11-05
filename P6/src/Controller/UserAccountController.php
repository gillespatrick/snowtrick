<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

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
}
