<?php

namespace GAlter\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class etudiantType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('adresse')
                ->add('username','text',array('read_only' => true))
            ->add('telephone')
            ->add('etat', 'choice', array(
            'choices'   => array('actif' => 'Activer', 'inactif' => 'Desactiver'),
            'expanded'  => true,
            'multiple'=>false,
        ))
            ->add('prenom','text',array('read_only' => true))
//            ->add('telephone')
//            ->add('adresse')
//            ->add('information_contrat')
//            ->add('typecontrat')
//            ->add('etat','choice')
//            ->add('optionsCompte')
            ->add('numeroetudiant', 'text',array('read_only' => true))
            ->add('Tuteur')
            ->add('TuteurEntreprise');

    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GAlter\UserBundle\Entity\etudiant'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'galter_userbundle_etudiant';
    }
}
