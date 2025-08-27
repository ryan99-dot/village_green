<?php

namespace App\Form;

use App\Entity\Fournisseur;
use App\Entity\Produit;
use App\Entity\SousRubrique;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('reference')
            ->add('nom')
            ->add('description')
            ->add('prix')
            ->add('photo')
            ->add('stock', IntegerType::class)
            ->add('publie')
            ->add('actif')
            ->add('prixAchat')
            ->add('sousRubrique', EntityType::class, [
                'class' => SousRubrique::class,
                'choice_label' => 'nom',
            ])
            ->add('fournisseur', EntityType::class, [
                'class' => Fournisseur::class,
                'choice_label' => 'nom',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}
