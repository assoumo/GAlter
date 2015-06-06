<?php

namespace GAlter\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * agenda
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GAlter\GestionBundle\Entity\AgendaRepository")
 */
class Agenda
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
     * @ORM\ManyToOne(targetEntity="GAlter\UserBundle\Entity\Etudiant", inversedBy="agendas")
     * @ORM\JoinColumn(name="id_etudiant", referencedColumnName="id")
     */
    private $etudiant;

    

  

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=255)
     */
    private $lieu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure", type="time")
     */
    private $heure;


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
     * Set idAgenda
     *
     * @param string $idAgenda
     * @return agenda
     */
    public function setIdAgenda($idAgenda)
    {
        $this->idAgenda = $idAgenda;

        return $this;
    }

    /**
     * Get idAgenda
     *
     * @return string 
     */
    public function getIdAgenda()
    {
        return $this->idAgenda;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return agenda
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
     * Set date
     *
     * @param \DateTime $date
     * @return agenda
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set lieu
     *
     * @param string $lieu
     * @return agenda
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;

        return $this;
    }

    /**
     * Get lieu
     *
     * @return string 
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * Set heure
     *
     * @param \DateTime $heure
     * @return agenda
     */
    public function setHeure($heure)
    {
        $this->heure = $heure;

        return $this;
    }

    /**
     * Get heure
     *
     * @return \DateTime 
     */
    public function getHeure()
    {
        return $this->heure;
    }

    /**
     * Set etudiant
     *
     * @param \GAlter\UserBundle\Entity\Etudiant $etudiant
     * @return agenda
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
}
