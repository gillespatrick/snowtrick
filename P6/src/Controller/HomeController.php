<?php

namespace App\Controller;

use App\Entity\Trick;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        
        $trickRepository = $this -> getDoctrine() -> getRepository(Trick::class);
        $tricks = $trickRepository->findAll();
        return $this->render('home/home.html.twig', [
            'tricks' => $tricks
        ]);
    }
}
