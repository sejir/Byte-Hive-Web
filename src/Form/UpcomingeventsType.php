<?php

namespace App\Form;

use App\Entity\Upcomingevents;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UpcomingeventsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('event_number')
            ->add('event_name')
            ->add('location')
            ->add('date_camping')
            ->add('guide')
            ->add('id_guide')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Upcomingevents::class,
        ]);
    }
}
