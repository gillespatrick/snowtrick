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

    //1-Cree un TrickController.php : action qui permet de load les tricks
    // Detail d'un trick
    //2- Maquette = index (Desktop && Mobil)


    /**
     * Display trick details
     * 
     * @Route("trick/{name}", name = "detailTrick")
     *
     */

    public function detail_trick($name)
    {
        $trickRepository = $this->getDoctrine()-> getRepository(Trick::class);
        $trick = $trickRepository->findOneByName($name);
        return $this->render('home/detail_trick.html.twig', [
            'trick' => $trick
        ]);
    }
}
