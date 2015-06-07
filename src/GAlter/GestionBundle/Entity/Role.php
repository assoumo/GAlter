<?php

namespace GAlter\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * role
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GAlter\GestionBundle\Entity\RoleRepository")
 */
class Role
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
     * @ORM\Column(name="id_role", type="integer")
     */
    private $idRole;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;


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
     * Set idRole
     *
     * @param integer $idRole
     * @return role
     */
    public function setIdRole($idRole)
    {
        $this->idRole = $idRole;

        return $this;
    }

    /**
     * Get idRole
     *
     * @return integer 
     */
    public function getIdRole()
    {
        return $this->idRole;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return role
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
}
