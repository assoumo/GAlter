<?php

namespace GAlter\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * formation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GAlter\GestionBundle\Entity\FormationRepository")
 */
class Formation
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
     *@ORM\OneToOne(targetEntity="GAlter\UserBundle\Entity\Responsable", cascade={"persist"}, mappedBy="formations")
     *
     */
    private $responsable;

  
    /**
     *@ORM\OneToMany(targetEntity="Annee_Formation_Etudiant", cascade={"persist"}, mappedBy="Formations")
     *
     */
    private $annee_formation_etudiant;
    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @ORM\Column(name="description" , type="string", length=1000 )
     */
    private $description; 


    /**
     * @var string
     *
     * @ORM\Column(name="departement", type="string", length=255)
     */
    private $departement;


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
     * Set idFormation
     *
     * @param integer $idFormation
     * @return formation
     */
    public function setIdFormation($idFormation)
    {
        $this->idFormation = $idFormation;

        return $this;
    }

    /**
     * Get idFormation
     *
     * @return integer 
     */
    public function getIdFormation()
    {
        return $this->idFormation;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return formation
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set departement
     *
     * @param string $departement
     * @return formation
     */
    public function setDepartement($departement)
    {
        $this->departement = $departement;

        return $this;
    }

    /**
     * Get departement
     *
     * @return string 
     */
    public function getDepartement()
    {
        return $this->departement;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->responsables = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add responsables
     *
     * @param \GAlter\GestionBundle\Entity\Responsable $responsables
     * @return formation
     */
    public function addResponsable(\GAlter\UserBundle\Entity\Responsable $responsables)
    {
        $this->responsables[] = $responsables;

        return $this;
    }

    /**
     * Remove responsables
     *
     * @param \GAlter\UserBundle\Entity\Responsable $responsables
     */
    public function removeResponsable(\GAlter\UserBundle\Entity\Responsable $responsables)
    {
        $this->responsables->removeElement($responsables);
    }

    /**
     * Get responsables
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getResponsables()
    {
        return $this->responsables;
    }

    /**
     * Add annee_formation
     *
     * @param \GAlter\GestionBundle\Entity\Annee_Formation_Etudiant $anneeFormation
     * @return formation
     */
    public function addAnneeFormation(\GAlter\GestionBundle\Entity\Annee_Formation_Etudiant $anneeFormation)
    {
        $this->annee_formation[] = $anneeFormation;

        return $this;
    }

    /**
     * Remove annee_formation
     *
     * @param \GAlter\GestionBundle\Entity\Annee_Formation_Etudiant $anneeFormation
     */
    public function removeAnneeFormation(\GAlter\GestionBundle\Entity\Demo\Annee_Formation_Etudiant $anneeFormation)
    {
        $this->annee_formation->removeElement($anneeFormation);
    }

    /**
     * Get annee_formation
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAnneeFormation()
    {
        return $this->annee_formation;
    }

    /**
     * Set responsable
     *
     * @param \GAlter\UserBundle\Entity\Responsable $responsable
     *
     * @return Formation
     */
    public function setResponsable(\GAlter\UserBundle\Entity\Responsable $responsable = null)
    {
        $this->responsable = $responsable;

        return $this;
    }

    /**
     * Get responsable
     *
     * @return \GAlter\UserBundle\Entity\Responsable
     */
    public function getResponsable()
    {
        return $this->responsable;
    }

    /**
     * Add anneeFormationEtudiant
     *
     * @param \GAlter\GestionBundle\Entity\Annee_Formation_Etudiant $anneeFormationEtudiant
     *
     * @return Formation
     */
    public function addAnneeFormationEtudiant(\GAlter\GestionBundle\Entity\Annee_Formation_Etudiant $anneeFormationEtudiant)
    {
        $this->annee_formation_etudiant[] = $anneeFormationEtudiant;

        return $this;
    }

    /**
     * Remove anneeFormationEtudiant
     *
     * @param \GAlter\GestionBundle\Entity\Annee_Formation_Etudiant $anneeFormationEtudiant
     */
    public function removeAnneeFormationEtudiant(\GAlter\GestionBundle\Entity\Annee_Formation_Etudiant $anneeFormationEtudiant)
    {
        $this->annee_formation_etudiant->removeElement($anneeFormationEtudiant);
    }

    /**
     * Get anneeFormationEtudiant
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAnneeFormationEtudiant()
    {
        return $this->annee_formation_etudiant;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Formation
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
}
