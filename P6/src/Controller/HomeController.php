<?php

namespace App\Controller;

use App\Entity\Trick;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     * @Route("/tricks", name="tricks")
     */
    public function index()
    {
        
        $trickRepository = $this -> getDoctrine() -> getRepository(Trick::class);
        $tricks = $trickRepository->findAll();
        return $this->render('home/home.html.twig', [
            'tricks' => $tricks
        ]);
    }

    
    //min-higth?
    //Creer un Controller trick 
    //Ajouter un slug
    //Reouvre le doc des specifications detaillees
    //et trouver les detail qui concerne les medias


   

    


   
}