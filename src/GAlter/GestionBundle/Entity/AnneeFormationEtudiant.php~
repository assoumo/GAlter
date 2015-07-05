<?php

namespace GAlter\GestionBundle\Entity;
use GAlter\UserBundle\Etity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AnneeFormationEtudiant
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GAlter\GestionBundle\Entity\AnneeFormationEtudiantRepository")
 */
class AnneeFormationEtudiant
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
     *@ORM\ManyToOne(targetEntity="GAlter\UserBundle\Entity\Etudiant", inversedBy="anneeFormationEtudiant")
     *@ORM\JoinColumn(name="etudiant_id", referencedColumnName="id")
     */
    private $etudiants;

    /**
     *@ORM\ManyToOne(targetEntity="GAlter\GestionBundle\Entity\Formation" , inversedBy="anneeFormationEtudiant")
     *@ORM\JoinColumn(name="formation_id", referencedColumnName="id")
     */
    private $Formations;

    /**
     * @var integer
     *
     * @ORM\Column(name="annee_formation", type="integer")
     */
    private $anneeFormation;



    /**
     * @ORM\Column(type="string", length=250)
     */
    protected $EstValide;

    /**
     * @return int
     */
    public function getAnneeFormation()
    {
        return $this->anneeFormation;
    }

    /**
     * @param int $anneeFormation
     */
    public function setAnneeFormation($anneeFormation)
    {
        $this->anneeFormation = $anneeFormation;
    }


    /**
     * @return mixed
     */
    public function getEtudiant()
    {
        return $this->etudiants;
    }

    /**
     * @return mixed
     */
    public function getFormation()
    {
        return $this->Formations;
    }


}
