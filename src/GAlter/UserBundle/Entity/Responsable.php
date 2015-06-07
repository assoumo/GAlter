<?php

namespace GAlter\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use PUGX\MultiUserBundle\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity
 * @ORM\Table(name="Responsable")
 * @UniqueEntity(fields = "username", targetClass = "GAlter\UserBundle\Entity\User", message="fos_user.username.already_used")
 * @UniqueEntity(fields = "email", targetClass = "GAlter\UserBundle\Entity\User", message="fos_user.email.already_used")
 */
class Responsable extends User
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $nom;
    /**
     *@ORM\Column(type="string", length=255)
     */
    protected $prenom;
    /**
     *@ORM\Column(type="string", length=255)
     */
    protected $adresse; 
    
    /**
     *@ORM\Column(type="string", length=255)
     */
    protected $telephone; 
    
    /**
     *@ORM\Column(type="string", length=255)
     */
    protected $organisation; 


    /**
     * @ORM\OneToMany(targetEntity="GAlter\UserBundle\Entity\Etudiant", mappedBy="Responsable", cascade={"persist"})
     */
    protected $Etudiant;


    /**
     *@ORM\OneToMany(targetEntity="GAlter\GestionBundle\Entity\RemarqueResponsableRapport", mappedBy="responsableId")
     */
    private $remarqueResponsableRapport;

    /**
     *@ORM\OneToOne(targetEntity="GAlter\GestionBundle\Entity\Formation", cascade={"persist"}, inversedBy="responsable")
     *@ORM\JoinColumn(name="formation_id", referencedColumnName="id")
     */
    private  $formations;

    public  function __construct(){

       $this->Etudiant= new \Doctrine\Common\Collections\ArrayCollection();


        parent::__construct();
    }


    /**
     * Add etudiant
     *
     * @param \GAlter\UserBundle\Entity\Etudiant $etudiant
     *
     * @return Responsable
     */
    public function addEtudiant(\GAlter\UserBundle\Entity\Etudiant $etudiant)
    {
        $this->Etudiant[] = $etudiant;

        return $this;
    }

    /**
     * Remove etudiant
     *
     * @param \GAlter\UserBundle\Entity\Etudiant $etudiant
     */
    public function removeEtudiant(\GAlter\UserBundle\Entity\Etudiant $etudiant)
    {
        $this->Etudiant->removeElement($etudiant);
    }

    /**
     * Get etudiant
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEtudiant()
    {
        return $this->Etudiant;
    }

    /**
     * Add formation
     *
     * @param \GAlter\GestionBundle\Entity\Formation $formation
     *
     * @return Responsable
     */
    public function addFormation(\GAlter\GestionBundle\Entity\Formation $formation)
    {
        $this->Formations[] = $formation;

        return $this;
    }

    /**
     * Remove formation
     *
     * @param \GAlter\GestionBundle\Entity\Formation $formation
     */
    public function removeFormation(\GAlter\GestionBundle\Entity\Formation $formation)
    {
        $this->Formations->removeElement($formation);
    }

    /**
     * Get formations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFormations()
    {
        return $this->Formations;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Responsable
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Responsable
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Responsable
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return Responsable
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set organisation
     *
     * @param string $organisation
     *
     * @return Responsable
     */
    public function setOrganisation($organisation)
    {
        $this->organisation = $organisation;

        return $this;
    }

    /**
     * Get organisation
     *
     * @return string
     */
    public function getOrganisation()
    {
        return $this->organisation;
    }

    /**
     * Add remarqueResponsableRapport
     *
     * @param \GAlter\GestionBundle\Entity\RemarqueResponsableRapport $remarqueResponsableRapport
     *
     * @return Responsable
     */
    public function addRemarqueResponsableRapport(\GAlter\GestionBundle\Entity\RemarqueResponsableRapport $remarqueResponsableRapport)
    {
        $this->remarqueResponsableRapport[] = $remarqueResponsableRapport;

        return $this;
    }

    /**
     * Remove remarqueResponsableRapport
     *
     * @param \GAlter\GestionBundle\Entity\RemarqueResponsableRapport $remarqueResponsableRapport
     */
    public function removeRemarqueResponsableRapport(\GAlter\GestionBundle\Entity\RemarqueResponsableRapport $remarqueResponsableRapport)
    {
        $this->remarqueResponsableRapport->removeElement($remarqueResponsableRapport);
    }

    /**
     * Get remarqueResponsableRapport
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRemarqueResponsableRapport()
    {
        return $this->remarqueResponsableRapport;
    }

    /**
     * Set formations
     *
     * @param \GAlter\GestionBundle\Entity\Formation $formations
     *
     * @return Responsable
     */
    public function setFormations(\GAlter\GestionBundle\Entity\Formation $formations = null)
    {
        $this->formations = $formations;

        return $this;
    }
}
