<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ProfileType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserController extends AbstractController
{
    /**
     * @Route("/user/{username}/", name="show_user")
     */
    public function index(User $user)
    {
        
        return $this->render('user/user.html.twig', [
           'user' => $user
          //'user' => $this ->getUser()
        ]);
    }

   
    /**
     * Allow to update my profile
     * 
     * @Route("/user/profile", name ="user_profil")
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




        return $this->render('user/profil.html.twig', [
            'form' => $form->createView()
        ]);
    }




}