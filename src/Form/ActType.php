<?php

namespace App\Form;

use App\Entity\Act;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ActType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomAct')
            ->add('description')
            //->add('dDebut')
            ->add('dDebut',DateType::class,array(
                'required' => false,
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'input-inline datepicker',
                    'data-provide' => 'datepicker',
                    'html5' => false,
                ],
            ))
            ->add('dFin',DateType::class,array(
                'required' => false,
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'input-inline datepicker',
                    'data-provide' => 'datepicker',
                    'html5' => false,
                ],
            ))
            //->add('dFin')
            ->add('emplacement')
            ->add('idemplacement')
            ->add('nbPersonne')
            ->add('idUser')
            ->add('submit', SubmitType::class, [

                'label' => 'Envoyer',

                'attr' => [

                    'class' => 'btn-primary pr-5 pl-5 d-table mx-auto text-white'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Act::class,
        ]);
    }
}
