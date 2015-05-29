<?php

namespace GAlter\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
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
     * @ORM\Column(type="string", length=100)
     */
    protected $prenom;
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
}
