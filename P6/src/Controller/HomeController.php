<?php

namespace App\Controller;

use App\Entity\Trick;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /** 
     * @Route("/", name="home")
     * @Route("tricks/", name="tricks")
     */
    public function index()
    {
        
        $trickRepository = $this -> getDoctrine() -> getRepository(Trick::class);
        $tricks = $trickRepository->findBy([],['create_date' => 'DESC'], 12,0);

        //dump($tricks);
        //die();
        return $this->render('home/home.html.twig', [
            'tricks' => $tricks
        ]);


    }

    
    //min-higth?
    //Creer un Controller trick                           --->                    OK
    //Ajouter un slug                                     --->                    OK
    //Reouvre le doc des specifications detaillees        --->                    OK
    //et trouver les detail qui concerne les medias       --->                    OK


   

    


   
}
