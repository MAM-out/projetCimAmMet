<?php

namespace App\Form;

use App\Entity\Usagers;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class UsagersCreationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('usager_n_carte')
            ->add('usager_nom_famille', TextType::class)
            ->add('usager_nom_usage', TextType::class)
            ->add('usager_prenom_1', TextType::class)
            ->add('usager_prenom_2', TextType::class)
            ->add('usager_d_naissance', DateTimeType::class)
            ->add('usager_adress_1', TextType::class)
            ->add('usager_adress_2', TextType::class)
            ->add('usager_cp', IntegerType::class)
            ->add('usager_ville', TextType::class)
                //ici on laisse le SGBD faire   ->add('usager_date_crea')
                //ici c'est une creation    ->add('usager_date_modif')
                //ici c'est une creation      ->add('usager_date_suppression')
            ->add('usager_date_fin_valid', DateTimeType::class)
            ->add('usager_status_valid', TextType::class)
            ->add('usager_role', IntegerType::class)
            ->add('usager_id_cimetiere', IntegerType::class) // a mettre en place une relation nom de cimetiere et numero de cimetiere dans la BDD
        ;
    }   

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Usagers::class,
        ]);
    }
}
