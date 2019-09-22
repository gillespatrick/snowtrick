<?php

namespace App\Form;

use App\Entity\Trick;
use App\Entity\Category;
//use App\Form\ConfigType\getConfig;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class TrickType extends AbstractType
{

    protected function getConfig($label, $placeholder,$options=[])
    {
        return array_merge([
            'label' => $label,
            'attr'  => [
                'placeholder' => $placeholder
            ]
            ], $options);
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder
            ->add('name',TextType::class, $this -> getConfig("Trick Name", "Enter Trick Name"))
            ->add('description', TextareaType::class, $this -> getConfig ("Description", "Enter the trick description"))
         //->add('create_date')
            ->add('cover', FileType::class, $this -> getConfig("Url Image", "Select your main image"))
            ->add('slug',TextType::class, $this -> getConfig("Entre ", "Taper une chose"),['require' => true])
            ->add('category',EntityType::class,[
                        'class' => Category::class,
                        'choice_label'=> 'name',
               ])
           // ->add('user')
        ;
    
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Trick::class,
        ]);
    }
}

