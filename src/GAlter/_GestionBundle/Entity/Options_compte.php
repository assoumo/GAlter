<?php

namespace GAlter\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Options_compte
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GAlter\GestionBundle\Entity\Options_compteRepository")
 */
class Options_compte
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
     * @ORM\OneToOne(targetEntity="GAlter\UserBundle\Entity\Etudiant", cascade={"persist"}, mappedBy="optionsCompte")
     */
    private $etudiant;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_parametre", type="integer")
     */
    private $idParametre;

    /**
     * @var boolean
     *
     * @ORM\Column(name="alerte_active", type="boolean")
     */
    private $alerteActive;

    /**
     * @var integer
     *
     * @ORM\Column(name="periode", type="integer")
     */
    private $periode;


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
     * Set idParametre
     *
     * @param integer $idParametre
     * @return options_compte
     */
    public function setIdParametre($idParametre)
    {
        $this->idParametre = $idParametre;

        return $this;
    }

    /**
     * Get idParametre
     *
     * @return integer 
     */
    public function getIdParametre()
    {
        return $this->idParametre;
    }

    /**
     * Set alerteActive
     *
     * @param boolean $alerteActive
     * @return options_compte
     */
    public function setAlerteActive($alerteActive)
    {
        $this->alerteActive = $alerteActive;

        return $this;
    }

    /**
     * Get alerteActive
     *
     * @return boolean 
     */
    public function getAlerteActive()
    {
        return $this->alerteActive;
    }

    /**
     * Set periode
     *
     * @param integer $periode
     * @return options_compte
     */
    public function setPeriode($periode)
    {
        $this->periode = $periode;

        return $this;
    }

    /**
     * Get periode
     *
     * @return integer 
     */
    public function getPeriode()
    {
        return $this->periode;
    }

    /**
     * Set etudiant
     *
     * @param \GAlter\UserBundle\Entity\Etudiant $etudiant
     * @return options_compte
     */
    public function setEtudiant(\GAlter\UserBundle\Entity\Etudiant $etudiant = null)
    {
        $this->etudiant = $etudiant;

        return $this;
    }

    /**
     * Get etudiant
     *
     * @return \GAlter\UserBundle\Entity\etudiant 
     */
    public function getEtudiant()
    {
        return $this->etudiant;
    }
}
