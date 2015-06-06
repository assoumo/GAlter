<?php

namespace GAlter\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * rapport
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GAlter\GestionBundle\Entity\RapportRepository")
 */
class rapport
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
     * @ORM\ManyToOne(targetEntity="GAlter\UserBundle\Entity\Etudiant", inversedBy="rapports")
     * @ORM\JoinColumn(name="id_etudiant", referencedColumnName="id")
     */
    private $etudiant;

    /**
     *@ORM\OneToMany(targetEntity="GAlter\GestionBundle\Entity\Remarque_responsable_rapport", cascade={"persist"}, mappedBy="responsableIdRapport")
     */
    private $remarque;


    /**
     * @ORM\OneToOne(targetEntity="audit", cascade={"persist"})
     */
    private $audit;


    /**
     * @var string
     *
     * @ORM\Column(name="periode", type="string", length=255)
     */
    private $periode;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=255)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=1000)
     */
    private $contenu;


    /**
     * Get id
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idRapport
     *
     * @param integer $idRapport
     * @return rapport
     */
    public function setIdRapport($idRapport)
    {
        $this->idRapport = $idRapport;

        return $this;
    }

    /**
     * Get idRapport
     *
     * @return integer 
     */
    public function getIdRapport()
    {
        return $this->idRapport;
    }

    /**
     * Set periode
     *
     * @param string $periode
     * @return rapport
     */
    public function setPeriode($periode)
    {
        $this->periode = $periode;

        return $this;
    }

    /**
     * Get periode
     *
     * @return string 
     */
    public function getPeriode()
    {
        return $this->periode;
    }

    /**
     * Set date
     *
     * @param string $date
     * @return rapport
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     * @return rapport
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set etudiant
     *
     * @param \GAlter\UserBundle\Entity\Etudiant $etudiant
     * @return rapport
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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->remarque = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add remarque
     *
     * @param \GAlter\GestionBundle\Entity\Remarque_responsable_rapport $remarque
     * @return rapport
     */
    public function addRemarque(\GAlter\GestionBundle\Entity\Remarque_responsable_rapport $remarque)
    {
        $this->remarque[] = $remarque;

        return $this;
    }

    /**
     * Remove remarque
     *
     * @param \GAlter\GestionBundle\Entity\Remarque_responsable_rapport $remarque
     */
    public function removeRemarque(\GAlter\GestionBundle\Entity\Remarque_responsable_rapport $remarque)
    {
        $this->remarque->removeElement($remarque);
    }

    /**
     * Get remarque
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRemarque()
    {
        return $this->remarque;
    }

    /**
     * Set audit
     *
     * @param GAlter\GestionBundle\Entity\Audit $audit
     * @return rapport
     */
    public function setAudit(\GAlter\GestionBundle\Entity\Audit $audit = null)
    {
        $this->audit = $audit;

        return $this;
    }

    /**
     * Get audit
     *
     * @return \GAlter\GestionBundle\Entity\Audit
     */
    public function getAudit()
    {
        return $this->audit;
    }
}
