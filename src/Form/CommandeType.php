<?php

namespace App\Form;

use App\Entity\Commande;
use App\Entity\Utilisateur;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommandeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('numero')
            ->add('date', null, [
                'widget' => 'single_text',
            ])
            ->add('etat', ChoiceType::class, [
                'choices' => [
                    'En préparation' => 'En préparation',
                    'Envoyée' => 'Envoyée',
                    'Livrée' => 'Livrée',
                    'Partiellement livrée' => 'Partiellement livrée',
                    'Annulée' => 'Annulée',
                ],
                'label' => false,
                'attr' => [
                    'class' => 'form-select form-select-sm',
                    'onchange' => 'this.form.submit()' // auto-submit
                ],
            ])
            ->add('referencePaiement')
            ->add('typePaiement')
            ->add('statutPaiement')
            ->add('datePaiement', null, [
                'widget' => 'single_text',
            ])
            ->add('utilisateur', EntityType::class, [
                'class' => Utilisateur::class,
                'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Commande::class,
        ]);
    }
}
