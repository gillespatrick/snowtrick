<?php

namespace App\Controller;

use DateTime;
use App\Entity\Trick;
use App\Form\TrickFormType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TickController extends AbstractController
{
     /**
     * @Route("/trick/{slug}", name = "showdetail")
     *
     * @return void
     */
    public function show($slug){

        $trickRepository = $this->getDoctrine()-> getRepository(Trick::class);
        $trick = $trickRepository->findOneBySlug($slug);

        return $this -> render('home/showDetail.html.twig',[
            'trick' => $trick
        ]);

    }
}
