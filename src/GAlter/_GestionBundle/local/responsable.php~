<?php

namespace Acme\DemoBundle\Entity\Demo;

use Doctrine\ORM\Mapping as ORM;

/**
 * responsable
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Acme\DemoBundle\Entity\Demo\responsableRepository")
 */
class responsable
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
     * @ORM\Column(name="id_responsable", type="integer")
     */
    private $idResponsable;


    /**
     *@ORM\ManyToMany(targetEntity="agenda", cascade={"persist"})
     *
     */
    private $agenda;

    /**
     *@ORM\ManyToMany(targetEntity="formation", mappedBy="responsables")
     *
     */
  
    private $formations;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *@ORM\Column(name="telephone", type="string", length=255)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="organisation", type="string", length=255)
     */
    private $organisation;


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
     * Set idResponsable
     *
     * @param integer $idResponsable
     * @return responsable
     */
    public function setIdResponsable($idResponsable)
    {
        $this->idResponsable = $idResponsable;

        return $this;
    }

    /**
     * Get idResponsable
     *
     * @return integer 
     */
    public function getIdResponsable()
    {
        return $this->idResponsable;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return responsable
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return responsable
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
     * Set telephone
     *
     * @param string $telephone
     * @return responsable
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return responsable
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set organisation
     *
     * @param string $organisation
     * @return responsable
     */
    public function setOrganisation($organisation)
    {
        $this->organisation = $organisation;

        return $this;
    }

    /**
     *@ORM\OneToMany(targetEntity="remarque_responsable_rapport", cascade={"persist"}, mappedBy="responsable")
     *
     */
    private $remarque;

    /**
     * Get organisation
     *
     * @return string 
     */
    public function getOrganisation()
    {
        return $this->organisation;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->agenda = new \Doctrine\Common\Collections\ArrayCollection();
        $this->formations = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add agenda
     *
     * @param \Acme\DemoBundle\Entity\Demo\agenda $agenda
     * @return responsable
     */
    public function addAgenda(\Acme\DemoBundle\Entity\Demo\agenda $agenda)
    {
        $this->agenda[] = $agenda;

        return $this;
    }

    /**
     * Remove agenda
     *
     * @param \Acme\DemoBundle\Entity\Demo\agenda $agenda
     */
    public function removeAgenda(\Acme\DemoBundle\Entity\Demo\agenda $agenda)
    {
        $this->agenda->removeElement($agenda);
    }

    /**
     * Get agenda
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAgenda()
    {
        return $this->agenda;
    }

    /**
     * Add formations
     *
     * @param \Acme\DemoBundle\Entity\Demo\formation $formations
     * @return responsable
     */
    public function addFormation(\Acme\DemoBundle\Entity\Demo\formation $formations)
    {
        $this->formations[] = $formations;

        return $this;
    }

    /**
     * Remove formations
     *
     * @param \Acme\DemoBundle\Entity\Demo\formation $formations
     */
    public function removeFormation(\Acme\DemoBundle\Entity\Demo\formation $formations)
    {
        $this->formations->removeElement($formations);
    }

    /**
     * Get formations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFormations()
    {
        return $this->formations;
    }

    /**
     * Add remarque
     *
     * @param \Acme\DemoBundle\Entity\Demo\remarque_responsable_rapport $remarque
     * @return responsable
     */
    public function addRemarque(\Acme\DemoBundle\Entity\Demo\remarque_responsable_rapport $remarque)
    {
        $this->remarque[] = $remarque;

        return $this;
    }

    /**
     * Remove remarque
     *
     * @param \Acme\DemoBundle\Entity\Demo\remarque_responsable_rapport $remarque
     */
    public function removeRemarque(\Acme\DemoBundle\Entity\Demo\remarque_responsable_rapport $remarque)
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
}
