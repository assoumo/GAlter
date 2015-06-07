<?php

namespace GAlter\GestionBundle\Entity;
use GAlter\UserBundle\Etity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AnneeFormationEtudiant
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GAlter\GestionBundle\Entity\AnneeFormationEtudiantRepository")
 */
class AnneeFormationEtudiant
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
    private $etudiants;

    /**
     *@ORM\ManyToOne(targetEntity="GAlter\GestionBundle\Entity\Formation" , inversedBy="anneeFormationEtudiant")
     *@ORM\JoinColumn(name="formation_id", referencedColumnName="id")
     */
    private $Formations;

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
     * @return AnneeFormationEtudiant
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
     * @return AnneeFormationEtudiant
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
     * @return AnneeFormationEtudiant
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

    /**
     * Set etudiant
     *
     * @param \GAlter\UserBundle\Entity\Etudiant $etudiant
     *
     * @return AnneeFormationEtudiant
     */
    public function setEtudiant(\GAlter\UserBundle\Entity\Etudiant $etudiant = null)
    {
        $this->etudiant = $etudiant;

        return $this;
    }

    /**
     * Get etudiant
     *
     * @return \GAlter\UserBundle\Entity\Etudiant
     */
    public function getEtudiant()
    {
        return $this->etudiant;
    }

    /**
     * Set etudiants
     *
     * @param \GAlter\UserBundle\Entity\Etudiant $etudiants
     *
     * @return AnneeFormationEtudiant
     */
    public function setEtudiants(\GAlter\UserBundle\Entity\Etudiant $etudiants = null)
    {
        $this->etudiants = $etudiants;

        return $this;
    }

    /**
     * Get etudiants
     *
     * @return \GAlter\UserBundle\Entity\Etudiant
     */
    public function getEtudiants()
    {
        return $this->etudiants;
    }

    /**
     * Set formations
     *
     * @param \GAlter\GestionBundle\Entity\Formation $formations
     *
     * @return AnneeFormationEtudiant
     */
    public function setFormations(\GAlter\GestionBundle\Entity\Formation $formations = null)
    {
        $this->Formations = $formations;

        return $this;
    }

    /**
     * Get formations
     *
     * @return \GAlter\GestionBundle\Entity\Formation
     */
    public function getFormations()
    {
        return $this->Formations;
    }
}
