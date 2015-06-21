<?php

namespace GAlter\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RemarqueTuteurRapport
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GAlter\GestionBundle\Entity\RemarqueTuteurRapportRepository")
 */
class RemarqueTuteurRapport
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
     * @ORM\ManyToOne(targetEntity="GAlter\UserBundle\Entity\Tuteur", inversedBy="remarqueTuteurRapport")
     * @ORM\JoinColumn(name="tuteur_id", referencedColumnName="id")
     */
    private $tuteurId;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="GAlter\GestionBundle\Entity\Rapport", inversedBy="remarque")
     * @ORM\JoinColumn(name="rapport_id", referencedColumnName="id")
     */
    private $tuteurIdRapport;



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
     * Set tuteurId
     *
     * @param \GAlter\UserBundle\Entity\Tuteur $tuteurId
     *
     * @return RemarqueTuteurRapport
     */
    public function setTuteurId(\GAlter\UserBundle\Entity\Tuteur $tuteurId = null)
    {
        $this->tuteurId = $tuteurId;

        return $this;
    }

    /**
     * Get tuteurId
     *
     * @return \GAlter\UserBundle\Entity\Tuteur
     */
    public function getTuteurId()
    {
        return $this->tuteurId;
    }

    /**
     * Set tuteurIdRapport
     *
     * @param \GAlter\GestionBundle\Entity\Rapport $tuteurIdRapport
     *
     * @return RemarqueTuteurRapport
     */
    public function setTuteurIdRapport(\GAlter\GestionBundle\Entity\Rapport $tuteurIdRapport = null)
    {
        $this->tuteurIdRapport = $tuteurIdRapport;

        return $this;
    }

    /**
     * Get tuteurIdRapport
     *
     * @return \GAlter\GestionBundle\Entity\Rapport
     */
    public function getTuteurIdRapport()
    {
        return $this->tuteurIdRapport;
    }
}