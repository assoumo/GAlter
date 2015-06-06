<?php

namespace GAlter\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use GAlter\GestionBundle\Entity;
use PUGX\MultiUserBundle\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity
 * @ORM\Table(name="Etudiant")
 * @UniqueEntity(fields = "username", targetClass = "GAlter\UserBundle\Entity\User", message="fos_user.username.already_used")
 * @UniqueEntity(fields = "email", targetClass = "GAlter\UserBundle\Entity\User", message="fos_user.email.already_used")
 */
class Etudiant  extends User
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToMany(targetEntity="GAlter\GestionBundle\Entity\Agenda", mappedBy="etudiant")
     */
    private $agendas;

    /**
     * @ORM\OneToOne(targetEntity="GAlter\GestionBundle\Entity\Options_compte", cascade={"persist"}, inversedBy="etudiant")
     */
    private $options_compte;

    /**
     * @ORM\OneToMany(targetEntity="GAlter\GestionBundle\Entity\Rapport", mappedBy="etudiant")
     */
    private $rapports;

    /**
     *@ORM\OneToMany(targetEntity="GAlter\GestionBundle\Entity\Annee_Formation_Etudiant", cascade={"persist"}, mappedBy="etudiants")
     */
    private $annee_formation_etudiant;


    /**
     * @ORM\OneToMany(targetEntity="GAlter\GestionBundle\Entity\Projet", mappedBy="etudiant")
     */
    private $projet;


    /**
     * @ORM\Column(type="string", length=250)
     */
    protected $prenom;

    /**
     *@ORM\Column(type="string", length=400)
     */
    protected $telephone; 
    /**
     *@ORM\Column(type="string", length=500)
     */
    protected $adresse; 
    /**
     *@ORM\Column(type="string", length=700)
     */
    protected $information_contrat;
    /**
     *@ORM\Column(type="integer")
     */
    protected $typecontrat; 


    /**
     * @ORM\ManyToOne(targetEntity="GAlter\UserBundle\Entity\Responsable", inversedBy="Etudiant")
     * @ORM\JoinColumn(name="Responsable", referencedColumnName="id")
     */
    private $Responsable;

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Etudiant
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
     * Set responsable
     *
     * @param \GAlter\UserBundle\Entity\Responsable $responsable
     *
     * @return Etudiant
     */
    public function setResponsable(\GAlter\UserBundle\Entity\Responsable $responsable = null)
    {
        $this->Responsable = $responsable;

        return $this;
    }

    /**
     * Get responsable
     *
     * @return \GAlter\UserBundle\Entity\Responsable
     */
    public function getResponsable()
    {
        return $this->Responsable;
    }

    /**
     * Set optionsCompte
     *
     * @param \GAlter\GestionBundle\Entity\Options_compte $optionsCompte
     *
     * @return Etudiant
     */
    public function setOptionsCompte(\Galter\GestionBundle\Entity\Options_compte $optionsCompte = null)
    {
        $this->options_compte = $optionsCompte;

        return $this;
    }

    /**
     * Get optionsCompte
     *
     * @return \GAlter\GestionBundle\Entity\Options_compte
     */
    public function getOptionsCompte()
    {
        return $this->options_compte;
    }

    /**
     * Add anneeFormationEtudiant
     *
     * @param \GAlter\GestionBundle\Entity\Annee_Formation_Etudiant $anneeFormationEtudiant
     *
     * @return Etudiant
     */
    public function addAnneeFormationEtudiant(\Galter\GestionBundle\Entity\Annee_Formation_Etudiant $anneeFormationEtudiant)
    {
        $this->annee_formation_etudiant[] = $anneeFormationEtudiant;

        return $this;
    }

    /**
     * Remove anneeFormationEtudiant
     *
     * @param \GAlter\GestionBundle\Entity\Annee_Formation_Etudiant $anneeFormationEtudiant
     */
    public function removeAnneeFormationEtudiant(\Galter\GestionBundle\Entity\Annee_Formation_Etudiant $anneeFormationEtudiant)
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
     * Add agenda
     *
     * @param \GAlter\GestionBundle\Entity\Agenda $agenda
     *
     * @return Etudiant
     */
    public function addAgenda(\GAlter\GestionBundle\Entity\Agenda $agenda)
    {
        $this->agenda[] = $agenda;

        return $this;
    }

    /**
     * Remove agenda
     *
     * @param \GAlter\GestionBundle\Entity\Agenda $agenda
     */
    public function removeAgenda(\GAlter\GestionBundle\Entity\Agenda $agenda)
    {
        $this->agenda->removeElement($agenda);
    }

    /**
     * Get agenda
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAgenda()
    {
        return $this->agenda;
    }
}
