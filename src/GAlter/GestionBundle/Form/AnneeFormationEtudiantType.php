<?php

namespace GAlter\GestionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AnneeFormationEtudiantType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
//            ->add('anneeFormation')
//            ->add('EstValide')
            ->add('etudiants')
            ->add('Formations')


//            ->add('Formations',
//              'entity')


            ->add('EstValide', 'choice', array(
                'choices'   => array('en cours' => 'en cours', 'validée' => 'validée'),
                'preferred_choices' => array('Actif'),
            ))


            ->add('anneeFormation', 'choice', array(
                'choices'   => array('2015' => '2015',
                                    '2016' => '2016',
                    '2017' => '2017',
                    '2018' => '2018',
                    '2019' => '2019',
                    '2020' => '2020',
                    '2021' => '2021',
                    '2022' => '2022',
                    '2023' => '2023',
                    '2024' => '2024',
                    '2025' => '2025',
                    '2026' => '2026',),
                'preferred_choices' => array('2015'),
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GAlter\GestionBundle\Entity\AnneeFormationEtudiant'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'galter_gestionbundle_anneeformationetudiant';
    }
}
