<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ProfileType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
//use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


class UserController extends AbstractController
{
    /**
     * @Route("/user/dashboard", name="show_user")
     * IsGranted("ROLE_USER")
     */
    public function index( UserRepository $repo)
    {

         //$userRepository = $this->getDoctrine()->getRepository(User::class);
        //$user = $repo->find($slug_name);



        $user = $this->getUser();
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
     * @Route("/login", name="login_user")
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
     * @Route("/logout", name="logout")
     * @return void 
     */
    public function logout()
    {
        //nothing here ...
    }
}
