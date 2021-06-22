<?php

namespace App\Form;

use App\Entity\Users;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', TextType::class, ['attr' => ['class' =>'form-control text-center']])
            ->add('email', TextType::class, ['attr' => ['class' =>'form-control text-center']])
            ->add('roles', TextType::class, ['attr' => ['class' =>'form-control text-center']])
            ->add('password', PasswordType::class, ['attr' => ['class' =>'form-control text-center']])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Users::class,
        ]);
    }
}
