<?php

namespace App\Form;

use App\Entity\Usagers;
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
           // ->add('usager_n_carte')
            ->add('usager_nom_famille', TextType::class)
            ->add('usager_nom_usage', TextType::class)
            ->add('usager_prenom_1', TextType::class)
            ->add('usager_prenom_2', TextType::class)
            ->add('usager_d_naissance', DateTimeType::class)
            ->add('usager_adress_1', TextType::class)
            ->add('usager_adress_2', TextType::class)
            ->add('usager_cp', IntegerType::class)
            ->add('usager_ville', TextType::class)
            ->add('RECHERCHER', SubmitType::class)
            //->add('usager_date_crea')
            //->add('usager_date_modif')
            //->add('usager_date_suppression')
           // ->add('usager_date_fin_valid')
            //->add('usager_status_valid')
           // ->add('usager_role')
           // ->add('usager_id_cimetiere')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Usagers::class,
        ]);
    }
}
