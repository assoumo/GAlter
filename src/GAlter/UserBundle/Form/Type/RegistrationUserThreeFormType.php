<?php

namespace GAlter\UserBundle\Form\Type;

//use GAlter\GestionBundle\Entity;
//use GAlter\GestionBundle\GAlterGestionBundle;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationUserThreeFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // add your custom field
    //$formation=new Entity\Formation();

        $builder->add('telephone')
            ->add('adresse')
            ->add('nom')
            ->add('prenom')
            ->add('formation','entity', array('class'=>'GAlterGestionBundle:Formation',
                'property'=>'id'))
            ->add('RespContrat')
            ->add('roles', 'collection', array(
                    'type' => 'choice',
                    'options' => array(
                        'label' => false, /* Ajoutez cette ligne */
                        'choices' => array(
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