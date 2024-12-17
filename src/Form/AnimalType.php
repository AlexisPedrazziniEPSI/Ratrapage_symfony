<?php

namespace App\Form;

use App\Entity\Animal;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AnimalType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Identifiant')
            ->add('Nom')
            ->add('DateDeNaissance', null, [
                'widget' => 'single_text',
            ])
            ->add('DateArriverZoo', null, [
                'widget' => 'single_text',
            ])
            ->add('DateDepart', null, [
                'widget' => 'single_text',
            ])
            ->add('ZooProprio')
            ->add('Genre')
            ->add('Espece')
            ->add('Sexe')
            ->add('Steril')
            ->add('PeutEtreQuarantaine')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Animal::class,
        ]);
    }
}
