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
     * @ORM\OneToOne(targetEntity="GAlter\GestionBundle\Entity\OptionsCompte", cascade={"persist"}, inversedBy="etudiant")
     */
    private $optionsCompte;

    /**
     * @ORM\OneToMany(targetEntity="GAlter\GestionBundle\Entity\Rapport", mappedBy="etudiant")
     */
    private $rapports;

    /**
     *@ORM\OneToMany(targetEntity="GAlter\GestionBundle\Entity\AnneeFormationEtudiant", cascade={"persist"}, mappedBy="etudiants")
     */
    private $anneeFormationEtudiant;


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
     * @ORM\Column(type="string", length=250)
     */
    protected $etat;

    /**
     * @param mixed $etat
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    }

    /**
     * @return mixed
     */
    public function getEtat()
    {
        return $this->etat;
    }


    /**
     * @ORM\ManyToOne(targetEntity="GAlter\UserBundle\Entity\Tuteur", inversedBy="Etudiant")
     * @ORM\JoinColumn(name="Tuteur", referencedColumnName="id")
     */
    private $Tuteur;



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
     * Set telephone
     *
     * @param string $telephone
     *
     * @return Etudiant
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
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Etudiant
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
     * Set informationContrat
     *
     * @param string $informationContrat
     *
     * @return Etudiant
     */
    public function setInformationContrat($informationContrat)
    {
        $this->information_contrat = $informationContrat;

        return $this;
    }

    /**
     * Get informationContrat
     *
     * @return string
     */
    public function getInformationContrat()
    {
        return $this->information_contrat;
    }

    /**
     * Set typecontrat
     *
     * @param integer $typecontrat
     *
     * @return Etudiant
     */
    public function setTypecontrat($typecontrat)
    {
        $this->typecontrat = $typecontrat;

        return $this;
    }

    /**
     * Get typecontrat
     *
     * @return integer
     */
    public function getTypecontrat()
    {
        return $this->typecontrat;
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
        $this->agendas[] = $agenda;

        return $this;
    }

    /**
     * Remove agenda
     *
     * @param \GAlter\GestionBundle\Entity\Agenda $agenda
     */
    public function removeAgenda(\GAlter\GestionBundle\Entity\Agenda $agenda)
    {
        $this->agendas->removeElement($agenda);
    }

    /**
     * Get agendas
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAgendas()
    {
        return $this->agendas;
    }

    /**
     * Set optionsCompte
     *
     * @param \GAlter\GestionBundle\Entity\OptionsCompte $optionsCompte
     *
     * @return Etudiant
     */
    public function setOptionsCompte(\GAlter\GestionBundle\Entity\OptionsCompte $optionsCompte = null)
    {
        $this->optionsCompte = $optionsCompte;

        return $this;
    }

    /**
     * Get optionsCompte
     *
     * @return \GAlter\GestionBundle\Entity\OptionsCompte
     */
    public function getOptionsCompte()
    {
        return $this->optionsCompte;
    }

    /**
     * Add rapport
     *
     * @param \GAlter\GestionBundle\Entity\Rapport $rapport
     *
     * @return Etudiant
     */
    public function addRapport(\GAlter\GestionBundle\Entity\Rapport $rapport)
    {
        $this->rapports[] = $rapport;

        return $this;
    }

    /**
     * Remove rapport
     *
     * @param \GAlter\GestionBundle\Entity\Rapport $rapport
     */
    public function removeRapport(\GAlter\GestionBundle\Entity\Rapport $rapport)
    {
        $this->rapports->removeElement($rapport);
    }

    /**
     * Get rapports
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRapports()
    {
        return $this->rapports;
    }

    /**
     * Add anneeFormationEtudiant
     *
     * @param \GAlter\GestionBundle\Entity\AnneeFormationEtudiant $anneeFormationEtudiant
     *
     * @return Etudiant
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
     * Add projet
     *
     * @param \GAlter\GestionBundle\Entity\Projet $projet
     *
     * @return Etudiant
     */
    public function addProjet(\GAlter\GestionBundle\Entity\Projet $projet)
    {
        $this->projet[] = $projet;

        return $this;
    }

    /**
     * Remove projet
     *
     * @param \GAlter\GestionBundle\Entity\Projet $projet
     */
    public function removeProjet(\GAlter\GestionBundle\Entity\Projet $projet)
    {
        $this->projet->removeElement($projet);
    }

    /**
     * Get projet
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProjet()
    {
        return $this->projet;
    }

    /**
     * Set tuteur
     *
     * @param \GAlter\UserBundle\Entity\Tuteur $tuteur
     *
     * @return Etudiant
     */
    public function setTuteur(\GAlter\UserBundle\Entity\Tuteur $tuteur = null)
    {
        $this->Tuteur = $tuteur;

        return $this;
    }

    /**
     * Get tuteur
     *
     * @return \GAlter\UserBundle\Entity\Tuteur
     */
    public function getTuteur()
    {
        return $this->Tuteur;
    }
}
