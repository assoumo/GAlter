<?php

namespace GAlter\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use PUGX\MultiUserBundle\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity
 * @ORM\Table(name="TuteurEntreprise")
 * @UniqueEntity(fields = "username", targetClass = "GAlter\UserBundle\Entity\User", message="fos_user.username.already_used")
 * @UniqueEntity(fields = "email", targetClass = "GAlter\UserBundle\Entity\User", message="fos_user.email.already_used")
 */
class TuteurEntreprise extends User
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
     * @ORM\OneToMany(targetEntity="GAlter\UserBundle\Entity\Etudiant", mappedBy="TuteurEntreprise", cascade={"persist"})
     */
    protected $Etudiant;


    /**
     *@ORM\OneToMany(targetEntity="GAlter\GestionBundle\Entity\RemarqueTuteurRapport", mappedBy="tuteurId")
     */
    private $remarqueTuteurRapport;





    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Tuteur
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
     * @return Tuteur
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
     * @return Tuteur
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
     * @return Tuteur
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
     * @return Tuteur
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
     * Add etudiant
     *
     * @param \GAlter\UserBundle\Entity\Etudiant $etudiant
     *
     * @return Tuteur
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
     * Add remarqueTuteurRapport
     *
     * @param \GAlter\GestionBundle\Entity\RemarqueTuteurRapport $remarqueTuteurRapport
     *
     * @return Tuteur
     */
    public function addRemarqueTuteurRapport(\GAlter\GestionBundle\Entity\RemarqueTuteurRapport $remarqueTuteurRapport)
    {
        $this->remarqueTuteurRapport[] = $remarqueTuteurRapport;

        return $this;
    }

    /**
     * Remove remarqueTuteurRapport
     *
     * @param \GAlter\GestionBundle\Entity\RemarqueTuteurRapport $remarqueTuteurRapport
     */
    public function removeRemarqueTuteurRapport(\GAlter\GestionBundle\Entity\RemarqueTuteurRapport $remarqueTuteurRapport)
    {
        $this->remarqueTuteurRapport->removeElement($remarqueTuteurRapport);
    }

    /**
     * Get remarqueTuteurRapport
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRemarqueTuteurRapport()
    {
        return $this->remarqueTuteurRapport;
    }
}
