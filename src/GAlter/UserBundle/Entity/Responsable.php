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
     * @ORM\OneToMany(targetEntity="GAlter\UserBundle\Entity\Etudiant", mappedBy="Responsable", cascade={"persist"})
     */
    private $Etudiant;



    public  function __construct(){

       $this->Etudiant= new \Doctrine\Common\Collections\ArrayCollection();

        parent::__construct();
    }


    /**
     * Add etudiant
     *
     * @param \GAlter\UserBundle\Entity\Etudiant $etudiant
     *
     * @return Responsable
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
}
