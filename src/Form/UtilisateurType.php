<?php

namespace App\Form;

use App\Entity\Utilisateur;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UtilisateurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $isPasswordChange = $options['is_password_change'] ?? false;

        if ($isPasswordChange) {
            $builder
                ->add('currentPassword', PasswordType::class, [
                    'label' => 'Mot de passe actuel',
                    'mapped' => false,
                    'required' => true,
                ])
                ->add('password', RepeatedType::class, [
                    'type' => PasswordType::class,
                    'mapped' => false, // important : on va hasher manuellement
                    'first_options' => ['label' => 'Nouveau mot de passe'],
                    'second_options' => ['label' => 'Confirmation du mot de passe'],
                    'invalid_message' => 'Les mots de passe ne correspondent pas.',
                ])
                ->add('save', SubmitType::class);
        } else {
            $builder
                ->add('email', EmailType::class)
                ->add('roles', ChoiceType::class, [
                    'choices' => [
                        'Utilisateur' => 'ROLE_USER',
                        'Admin' => 'ROLE_ADMIN',
                        'Commercial' => 'ROLE_COMMERCIAL',
                    ],
                    'multiple' => true,
                    'expanded' => true, // ou false selon si tu veux des cases à cocher ou une liste
                ])
                ->add('currentPassword', PasswordType::class, [
                    'label' => 'Mot de passe actuel',
                    'mapped' => false,
                    'required' => true,
                ])
                ->add('password', RepeatedType::class, [
                    'type' => PasswordType::class,
                    'mapped' => true,
                    'first_options' => ['label' => 'Mot de passe'],
                    'second_options' => ['label' => 'Confirmer le mot de passe'],
                    'invalid_message' => 'Les mots de passe ne correspondent pas.',
                ])
                ->add('nom', TextType::class)
                ->add('prenom', TextType::class)
                ->add('categorieClient', ChoiceType::class, ['choices' =>["Professionnel"=>"Professionnel", "Particulier"=>"Particulier"], "expanded"=> true])
                ->add('telephone')
                ->add('coefficientTaxe')
                ->add('service')
                ->add('reduction')
                ->add('commercial', EntityType::class, [
                    'class' => Utilisateur::class,
                    'choice_label' => 'id',
                ])
                ->add('save', SubmitType::class)
            ;
        }
    }
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
            'is_password_change' => false,
        ]);
    }
}
