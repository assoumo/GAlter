<?php

namespace GAlter\GestionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class Options_compteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idParametre')
            ->add('alerteActive')
            ->add('periode')
            ->add('etudiant')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GAlter\GestionBundle\Entity\OptionsCompte'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'galter_gestionbundle_options_compte';
    }
}
