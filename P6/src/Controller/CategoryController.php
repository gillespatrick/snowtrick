<?php

namespace App\Controller;

use App\Entity\Category;
use App\Form\CategoryType;
use App\Repository\CategoryRepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CategoryController extends AbstractController
{
    /**
     * @Route("/category", name="category")
     */
    public function index(CategoryRepository $categoryRepository): Response
    {

        return $this->render('category/index.html.twig', [
            'categories' => $categoryRepository -> findAll()
        ]);
    }


    /**
     * @Route("/category/new", name="category_new")
     */
    public function new(Request $request, ObjectManager $manager)
    {
        $category = new Category();
        $form = $this -> createForm(CategoryType::class, $category);
        $form -> handleRequest($request);

        if ($form -> isSubmitted() && $form -> isValid()) {
            $manager -> persist($category);
            $manager -> flush();

            $this->addFlash(
                'notice',
              " {$category -> getName()}  Category has been added" );

            
            return $this->redirectToRoute('category_new');
        }

        return $this->render('category/new.html.twig', [
            'form' => $form -> createView()
        ]);
    }


    /**
     * @Route("/category/{name}", name="category_show", methods={"GET"})
     */
    public function show(Category $category): Response
    {
        return $this->render('category/show.html.twig', [
            'category' => $category,
        ]);
    }


     /**
     * @Route("/category/{id}/delete", name="category_delete")
     * @return Response
     * @param Category $category
     * @package ObjectManager $manager
     */
    public function delete( Category $category, ObjectManager $manager)
    {
           
            $manager->remove($category);
            $manager->flush();

            $this->addFlash(
                'notice',
              "{$category -> getName()} Category has been removed" );
  

        return $this->redirectToRoute('category');
    }


    
  

        



    /**
     * @Route("category/{id}/edit", name="category_edit")
     *@return Response
     *@package ObjectManager $manager
     * @param Category $category
     */
    public function edit(Category $category, Request $request,ObjectManager $manager): Response
    {
        $form = $this -> createForm(CategoryType::class, $category);

        $form -> handleRequest($request);
        if ($form -> isSubmitted() && $form -> isValid()) {

            $manager -> persist($category);
            $manager -> flush();

            $this->addFlash(
                'notice',
              " {$category -> getName()} category has been updated" );

              return $this->redirectToRoute('category');
            
        }

        return $this -> render('category/edit.html.twig',[
            'category' => $category,
            'form' => $form -> createView()
        ]);
    }
}
