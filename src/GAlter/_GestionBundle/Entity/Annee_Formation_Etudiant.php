<?php

namespace GAlter\GestionBundle\Entity;
use Galter\UserBundle\Etity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Annee_Formation_Etudiant
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GAlter\GestionBundle\Entity\Annee_Formation_EtudiantRepository")
 */
class Annee_Formation_Etudiant
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

     /**
     *@ORM\ManyToOne(targetEntity="GAlter\UserBundle\Entity\Etudiant", inversedBy="anneeFormationEtudiant")
     *@ORM\JoinColumn(name="etudiant_id", referencedColumnName="id")
     */
    private $etudiant;

     /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Formation", inversedBy="annee_Formation_Etudiant")
     * @ORM\JoinColumn(name="formation_id", referencedColumnName="id")
     */
    private $formationIdFormation;

    /**
     * @var integer
     *
     * @ORM\Column(name="annee_formation", type="integer")
     */
    private $anneeFormation;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set etudiantIdetudiant
     *
     * @param integer $etudiantIdetudiant
     * @return Annee_Formation_Etudiant
     */
    public function setEtudiantIdetudiant($etudiantIdetudiant)
    {
        $this->etudiantIdetudiant = $etudiantIdetudiant;

        return $this;
    }

    /**
     * Get etudiantIdetudiant
     *
     * @return integer 
     */
    public function getEtudiantIdetudiant()
    {
        return $this->etudiantIdetudiant;
    }

    /**
     * Set formationIdFormation
     *
     * @param integer $formationIdFormation
     * @return Annee_Formation_Etudiant
     */
    public function setFormationIdFormation($formationIdFormation)
    {
        $this->formationIdFormation = $formationIdFormation;

        return $this;
    }

    /**
     * Get formationIdFormation
     *
     * @return integer 
     */
    public function getFormationIdFormation()
    {
        return $this->formationIdFormation;
    }

    /**
     * Set anneeFormation
     *
     * @param integer $anneeFormation
     * @return Annee_Formation_Etudiant
     */
    public function setAnneeFormation($anneeFormation)
    {
        $this->anneeFormation = $anneeFormation;

        return $this;
    }

    /**
     * Get anneeFormation
     *
     * @return integer 
     */
    public function getAnneeFormation()
    {
        return $this->anneeFormation;
    }
}
