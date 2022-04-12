<?php

namespace App\Form;

use App\Entity\ResAct;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ResActType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomclient')
            ->add('prenomc')
            ->add('idact')
            ->add('nbrePerso')
            ->add('numc')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ResAct::class,
        ]);
    }
}
