<?php

namespace App\Form;

use App\Entity\ReclamationGuide;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReclamationGuideType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('id_client')
            
            ->add('id_guide')
            ->add('nom_guide')
            ->add('description')
            ->add('respond')
            ->add('status')
            ->add('reclamationdate')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ReclamationGuide::class,
        ]);
    }
}
