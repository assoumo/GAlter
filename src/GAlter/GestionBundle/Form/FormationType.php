<?php

namespace GAlter\GestionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Doctrine\ORM\EntityRepository;

use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FormationType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //->add('idFormation')
            ->add('libelle')
            ->add('description')
            ->add('departement')
//            ->add('responsable');
//          ->add('responsable',
//              'entity',
//              array(
//                  'class'=>'GAlter\UserBundle\Entity\Responsable',
//                  'property'=>'nom',
//                  'query_builder' =>function (\Doctrine\ORM\EntityRepository $repository)
//                      {
//                          return $repository->createQueryBuilder('s')
//                              ->where('s.RespContrat = ?1')
//                              ->setParameter(1, 'Alternance')
//                              ;
//                      }
//              )
//          );
;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GAlter\GestionBundle\Entity\Formation'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'galter_gestionbundle_formation';
    }
}
