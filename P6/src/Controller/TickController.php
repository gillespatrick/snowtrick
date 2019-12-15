<?php

namespace App\Controller;



use App\Entity\Media;
use App\Entity\Trick;
use App\Form\TrickType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class TickController extends AbstractController
{



    



     
    /**
     * @Route("/trick/addtrick", name="add_trick")
     * 
     */
    public function add( Trick $trick = null, Request $request, ObjectManager $manager)
    {

            $media = new Media();
            //$trick = new Trick();   

        $form = $this -> createForm(TrickType::class,$trick); 
        $form -> handleRequest($request);
        
        if ($form -> isSubmitted() && $form -> isValid()) {
            

            foreach ($trick ->getMedia() as $media ) {
               
                $media -> setTrick($trick);        
                $manager -> persist($media);        
            }

           // $image = $trick->getCover();
            $image = $form ->get('cover') ->getData();
            $fileName = md5(uniqid()).'.'.$image -> guessExtension();
            $image->move($this -> getParameter('upload_images'),$fileName);
            $trick -> setCover($fileName);

            // Save 
          
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
            'form' => $form -> createView(),
           
        ]);
    }

/**
     * Display the edition form
     * 
     * @Route("/trick/{id}/edit", name = "trick_edit")
     * 
     * @return Response 
     */

 public function edit(Trick $trick, Request $request){

   
       // $trick = new Trick();
 
  
       
        //$form = $this -> createForm(TrickType::class, $trick); 
       
      //  $form -> handleRequest($request);
        
       
        return $this -> render('home/editTrick.html.twig',[
           // 'form' => $form -> createView()
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
        $trick = $trickRepository -> findOneBySlug($slug);
        
        

        return $this->render('home/showDetail.html.twig', [
            'trick' => $trick,
            
           
        ]);
        
    }
}



    


     
    
