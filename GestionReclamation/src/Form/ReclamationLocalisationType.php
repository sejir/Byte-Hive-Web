<?php

namespace App\Form;

use App\Entity\ReclamationLocalisation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReclamationLocalisationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('id_client')
            
            ->add('id_localisation')
            ->add('description')
            ->add('respond')
            ->add('status')
            ->add('reclamationdate')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ReclamationLocalisation::class,
        ]);
    }
}
