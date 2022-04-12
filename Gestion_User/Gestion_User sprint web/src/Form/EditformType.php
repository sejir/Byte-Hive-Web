<?php

namespace App\Form;

use App\Entity\Users;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\ChoiceType;

class EditformType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('lastname')
            ->add('email')
            ->add('password')
            ->add('role',ChoiceType::class, [

                'label' => 'form.send_mail',
                'choices' => [
                    'form.no' => 0,
                    'form.yes' => 1,
                ],
                'choices_as_values' => true,
                'multiple' => false,
                'expanded' => true,
            ]) 
            
            ->add('profilepicture')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Users::class,
        ]);
    }
}
