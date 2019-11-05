<?php

namespace App\Controller;

use App\Entity\Trick;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TickController extends AbstractController
{
     /**
     * @Route("trick/{name}", name = "showdetail")
     *
     * @return void
     */
    public function show($name){

        $trickRepository = $this->getDoctrine()-> getRepository(Trick::class);
        $trick = $trickRepository->findOneByName($name);

        return $this -> render('home/showDetail.html.twig',[
            'trick' => $trick
        ]);

    }
}
