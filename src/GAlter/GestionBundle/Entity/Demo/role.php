<?php

namespace GAlter\GestionBundle\Entity\Demo;

/**
 * role
 */
class role
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $idRole;

    /**
     * @var string
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
     *
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
     *
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

