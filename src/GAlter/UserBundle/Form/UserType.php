<?php

namespace GAlter\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GAlter\UserBundle\Entity\User'
        ));
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // add your custom field

                $builder->add('roles', 'choice', array(
            'choices'   => array(
                'ROLE_ETUDIANT'   => 'ROLE_ETUDIANT',
                'ROLE_RESPONSABLE' => 'ROLE_RESPONSABLE',
                'ROLE_TUTEUR'   => 'ROLE_TUTEUR',
                'ROLE_ADMIN' =>
                    'ROLE_ADMIN '           ),
            'multiple'  => true,
//            'expanded'=>true,
        ));


  }

    /**
     * @return string
     */
    public function getName()
    {
        return 'galter_userbundle_user';
    }
}


