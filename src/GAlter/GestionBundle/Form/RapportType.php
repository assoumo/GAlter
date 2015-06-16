<?php

namespace GAlter\GestionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RapportType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('periodefin', 'date')
            ->add('periodedebut', 'date')
            ->add('contenu', 'textarea', array('attr' => array('rows' => '10','cols' => '10')))

        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GAlter\GestionBundle\Entity\Rapport'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'galter_gestionbundle_rapport';
    }
}
