<?php

namespace App\Controller;


use DateTime;
use App\Entity\Trick;
use App\Form\TrickType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TickController extends AbstractController
{


    /**
     * @Route("/addtrick", name="add_trick")
     */
    public function add( Request $request, ObjectManager $manager)
    {

        $trick = new Trick();
        
        $form = $this -> createForm(TrickType::class,$trick); 
        $form -> handleRequest($request);

        if ($form -> isSubmitted() && $form -> isValid()) {

            $image = $trick->getCover();
            $imageName = md5(uniqid()).'.'.$image -> guessExtension();
            $image->move($this -> getParameter('upload_images'),$imageName);
            $trick -> setName($imageName);

        
            
            if (!$trick -> getId()) {
                $trick -> setCreateDate(new \DateTime());
            }
            $manager -> persist($trick);
            $manager -> flush();

            $this->addFlash(
                'notice',
                'The trick has been added');

            return $this -> redirectToRoute('tricks');
        }


        return $this->render('home/new_trick.html.twig', [
            'form' => $form -> createView()
        ]);
    }









    /**
     * @Route("/trick/{slug}", name = "showdetail")
     *
     * @return void
     */
    public function show($slug)
    {

        $trickRepository = $this->getDoctrine()->getRepository(Trick::class);
        $trick = $trickRepository->findOneBySlug($slug);

        return $this->render('home/showDetail.html.twig', [
            'trick' => $trick
        ]);
    }
}
