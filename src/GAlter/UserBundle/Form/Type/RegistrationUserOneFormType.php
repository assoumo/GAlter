<?php
namespace GAlter\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RegistrationUserOneFormType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('prenom')
            ->add('Tuteur')
           ->add('TuteurEntreprise')
            ->add('telephone')
            ->add('adresse')
            ->add('typecontrat')
            ->add('information_contrat')
            //->add('groups')
            ->add('roles', 'collection', array(
                    'type' => 'choice',
                    'options' => array(
                        'label' => false, /* Ajoutez cette ligne */
                        'choices' => array(
                            'ROLE_ETUDIANT' => 'Etudiant',
                            'ROLE_RESPONSABLE' => 'Admin'


                        )
                    )
                )
            )


            ->add('etat', 'choice', array(
                'choices'   => array('Activer' => 'Actif', 'desactiver' => 'innacif'),
                'preferred_choices' => array('Actif'),
            ))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GAlter\UserBundle\Entity\Etudiant'
        ));
    }

    public function getParent()
    {
        return 'fos_user_registration';
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'fos_user_registration_form';
    }
}

