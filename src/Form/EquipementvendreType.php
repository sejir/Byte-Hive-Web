<?php

namespace App\Form;

use App\Entity\Equipementvendre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EquipementvendreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomequipement')
            ->add('prixequipement')
            ->add('descriptionequipement')
            ->add('imageequipement')
            ->add('quantiteequipement')
            ->add('idfournisseur')
            ->add('rating')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Equipementvendre::class,
        ]);
    }
}
