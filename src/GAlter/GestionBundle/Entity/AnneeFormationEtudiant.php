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
     * @ORM\Column(type="string", length=250)
     */
    protected $EstValide;

    /**
     * @return int
     */
    public function getAnneeFormation()
    {
        return $this->anneeFormation;
    }

    /**
     * @param int $anneeFormation
     */
    public function setAnneeFormation($anneeFormation)
    {
        $this->anneeFormation = $anneeFormation;
    }


    /**
     * @return mixed
     */
    public function getEtudiant()
    {
        return $this->etudiants;
    }

    /**
     * @return mixed
     */
    public function getFormation()
    {
        return $this->Formations;
    }



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
     * Set estValide
     *
     * @param string $estValide
     *
     * @return AnneeFormationEtudiant
     */
    public function setEstValide($estValide)
    {
        $this->EstValide = $estValide;

        return $this;
    }

    /**
     * Get estValide
     *
     * @return string
     */
    public function getEstValide()
    {
        return $this->EstValide;
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
