<?php

namespace GAlter\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * remarque_responsable_rapport
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GAlter\GestionBundle\Entity\remarque_responsable_rapportRepository")
 */
class Remarque_responsable_rapport
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
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="GAlter\UserBundle\Entity\Responsable", inversedBy="remarque_responsable_rapport")
     * @ORM\JoinColumn(name="responsable_id", referencedColumnName="id")
     */
    private $responsableId;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="GAlter\GestionBundle\Entity\Rapport", inversedBy="remarque")
     * @ORM\JoinColumn(name="rapport_id", referencedColumnName="id")
     */
    private $responsableIdRapport;

    /**
     * @var string
     *
     * @ORM\Column(name="remarque_contenu", type="string", length=1000)
     */
    private $remarqueContenu;


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
     * Set responsableId
     *
     * @param integer $responsableId
     * @return Remarque_responsable_rapport
     */
    public function setResponsableId($responsableId)
    {
        $this->responsableId = $responsableId;

        return $this;
    }

    /**
     * Get responsableId
     *
     * @return integer 
     */
    public function getResponsableId()
    {
        return $this->responsableId;
    }

    /**
     * Set responsableIdRapport
     *
     * @param integer $responsableIdRapport
     * @return Remarque_responsable_rapport
     */
    public function setResponsableIdRapport($responsableIdRapport)
    {
        $this->responsableIdRapport = $responsableIdRapport;

        return $this;
    }

    /**
     * Get responsableIdRapport
     *
     * @return integer 
     */
    public function getResponsableIdRapport()
    {
        return $this->responsableIdRapport;
    }

    /**
     * Set remarqueContenu
     *
     * @param string $remarqueContenu
     * @return Remarque_responsable_rapport
     */
    public function setRemarqueContenu($remarqueContenu)
    {
        $this->remarqueContenu = $remarqueContenu;

        return $this;
    }

    /**
     * Get remarqueContenu
     *
     * @return string 
     */
    public function getRemarqueContenu()
    {
        return $this->remarqueContenu;
    }
}
