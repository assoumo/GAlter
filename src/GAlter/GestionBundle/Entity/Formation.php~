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
     *@ORM\OneToMany(targetEntity="AnneeFormationEtudiant", cascade={"persist"}, mappedBy="Formations")
     *
     */
    private $anneeFormationEtudiant;
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
     *@ORM\OneToMany(targetEntity="GAlter\UserBundle\Entity\Responsable", mappedBy="formation")
     */
    private $responsable;



    /**
     * Constructor
     */
    public function __construct()
    {
        $this->anneeFormationEtudiant = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Formation
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

    /**
     * Set departement
     *
     * @param string $departement
     *
     * @return Formation
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
     * Add anneeFormationEtudiant
     *
     * @param \GAlter\GestionBundle\Entity\AnneeFormationEtudiant $anneeFormationEtudiant
     *
     * @return Formation
     */
    public function addAnneeFormationEtudiant(\GAlter\GestionBundle\Entity\AnneeFormationEtudiant $anneeFormationEtudiant)
    {
        $this->anneeFormationEtudiant[] = $anneeFormationEtudiant;

        return $this;
    }

    /**
     * Remove anneeFormationEtudiant
     *
     * @param \GAlter\GestionBundle\Entity\AnneeFormationEtudiant $anneeFormationEtudiant
     */
    public function removeAnneeFormationEtudiant(\GAlter\GestionBundle\Entity\AnneeFormationEtudiant $anneeFormationEtudiant)
    {
        $this->anneeFormationEtudiant->removeElement($anneeFormationEtudiant);
    }

    /**
     * Get anneeFormationEtudiant
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAnneeFormationEtudiant()
    {
        return $this->anneeFormationEtudiant;
    }

    /**
     * Add responsable
     *
     * @param \GAlter\GestionBundle\Entity\Responsable $responsable
     *
     * @return Formation
     */
    public function addResponsable(\GAlter\GestionBundle\Entity\Responsable $responsable)
    {
        $this->responsable[] = $responsable;

        return $this;
    }

    /**
     * Remove responsable
     *
     * @param \GAlter\GestionBundle\Entity\Responsable $responsable
     */
    public function removeResponsable(\GAlter\GestionBundle\Entity\Responsable $responsable)
    {
        $this->responsable->removeElement($responsable);
    }

    /**
     * Get responsable
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getResponsable()
    {
        return $this->responsable;
    }
}
