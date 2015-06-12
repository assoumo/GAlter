<?php

namespace GAlter\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationUserTwoFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // add your custom field


        $builder->add('telephone')
            ->add('adresse')
            ->add('nom')
            ->add('prenom')
            ->add('organisation')
            ->add('roles', 'collection', array(
                    'type' => 'choice',
                    'options' => array(
                        'label' => false, /* Ajoutez cette ligne */
                        'choices' => array(
                            'ROLE_TUTEUR' => 'Tuteur',
                            'ROLE_RESPONSABLE' => 'Responsable',




                        )
                    )
                )
            );
    }

    public function getParent()
    {
        return 'fos_user_registration';
    }

    public function getName()
    {
        return 'fos_user_registration_form';
    }
}