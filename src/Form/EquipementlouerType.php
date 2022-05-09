<?php

namespace App\Form;

use App\Entity\Equipementlouer;
use phpDocumentor\Reflection\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\RangeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Range;

class EquipementlouerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomequipement')
            ->add('prixequipement')
            ->add('descriptionequipement')
            ->add('imageequipement')
            ->add('idfournisseur')
            ->add('disponibilite')
            ->add('rating')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Equipementlouer::class,
        ]);
    }
}
