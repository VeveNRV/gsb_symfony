<?php

namespace AppliFraisBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormTypeInterface;
use Doctrine\DBAL\Types\DateType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UtilisateurEditType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('dateNaissance')
            ->add('adressePostal')
            ->add('codePostal')
            ->add('dateEmbauche')
            ->add('enabled')
            ->add('roles', ChoiceType::class, array(
                'choices' => array(
                                    'Visiteur' => 'ROLE_VISITEUR',
                                    'Comptable' => 'ROLE_COMPTABLE',
                                    'ADMIN' => 'ROLE_ADMIN',
                                    'SUPER ADMIN' => 'ROLE_SUPER_ADMIN',
                                ),
                'required'  => true,
                'multiple' => true,
                'expanded' => true,
                )
            )
        ;

    }
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppliFraisBundle\Entity\Utilisateur'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'applifraisbundle_utilisateur';
    }


}
