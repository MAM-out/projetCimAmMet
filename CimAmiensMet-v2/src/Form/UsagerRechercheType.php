<?php

namespace App\Form;

use App\Entity\UsagerRecherche;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class UsagerRechercheType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('usager_nom_famille', TextType::class)
          /*  ->add('usager_nom_usage', TextType::class)
            ->add('usager_prenom_1', TextType::class)
            ->add('usager_prenom_2', TextType::class)
            ->add('usager_d_naissance', DateTimeType::class)
            ->add('usager_adress_1', TextType::class)
            ->add('usager_adress_2', TextType::class)
            ->add('usager_cp', IntegerType::class)
            ->add('usager_ville', TextType::class)
          */  //->add('RECHERCHER', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => UsagerRecherche::class,
        ]);
    }
}
