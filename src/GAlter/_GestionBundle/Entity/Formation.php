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
     *@ORM\ManyToMany(targetEntity="GAlter\UserBundle\Entity\Responsable", cascade={"persist"}, inversedBy="Formations")
     *
     */
    private $responsables;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_formation", type="integer")
     */
    private $idFormation;


    /**
     *@ORM\OneToMany(targetEntity="Annee_Formation_Etudiant", cascade={"persist"}, mappedBy="Formation")
     *
     */
    private $annee_formation;
    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

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
}
