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

    protected $RespContrat;



    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="GAlter\GestionBundle\Entity\Formation", inversedBy="responsable")
     * @ORM\JoinColumn(name="formation_id", referencedColumnName="id")
     */
    private $formation;

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
     * Set respContrat
     *
     * @param string $respContrat
     *
     * @return Responsable
     */
    public function setRespContrat($respContrat)
    {
        $this->RespContrat = $respContrat;

        return $this;
    }

    /**
     * Get respContrat
     *
     * @return string
     */
    public function getRespContrat()
    {
        return $this->RespContrat;
    }

    /**
     * Set formation
     *
     * @param \GAlter\UserBundle\Entity\Fomation $formation
     *
     * @return Responsable
     */
    public function setFormation(\GAlter\UserBundle\Entity\Fomation $formation = null)
    {
        $this->formation = $formation;

        return $this;
    }

    /**
     * Get formation
     *
     * @return \GAlter\UserBundle\Entity\Fomation
     */
    public function getFormation()
    {
        return $this->formation;
    }
}
