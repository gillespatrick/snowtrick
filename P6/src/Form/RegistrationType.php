<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class RegistrationType extends AbstractType
{



     /**
     *
     * @param string $label
     * @param string $placeholder
     * @param array $options
     * @return array
     */
    protected function getConfig($label, $placeholder, $options = [])
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
            ->add('username',TextType::class, $this -> getConfig( "Username", "Enter your username" ))
            ->add('email',EmailType::class, $this -> getConfig("Email","Enter your email "))
            ->add('password', PasswordType::class, $this -> getConfig("Password", "Add an password"))
            ->add('img',UrlType::class, $this -> getConfig("Avatar", "Add your avatar !"))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
