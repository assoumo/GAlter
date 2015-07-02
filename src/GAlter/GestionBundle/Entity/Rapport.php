<?php

namespace GAlter\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * rapport
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GAlter\GestionBundle\Entity\RapportRepository")
 */
class Rapport
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
     * @ORM\ManyToOne(targetEntity="GAlter\UserBundle\Entity\Etudiant", inversedBy="rapports", cascade={"persist"})
     * @ORM\JoinColumn(name="id_etudiant", referencedColumnName="id")
     */
    private $etudiant;

    /**
     *@ORM\OneToMany(targetEntity="GAlter\GestionBundle\Entity\RemarqueTuteurRapport", cascade={"persist"}, mappedBy="tuteurIdRapport")
     */
    private $remarque;




    /**
     * @var datetime
     *
     * @ORM\Column(name="periodedebut" , type="datetime")
     */
    private $periodedebut;

    /**
     * @var string
     *
     * @ORM\Column(name="textaudit", type="string", length=255)
     */
    private $textaudit;




    /**
     * @var datetime
     *
     * @ORM\Column(name="periodfin", type="datetime")
     */
    private $periodefin;

    /**
     * @var datetime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=1000)
     */
    private $contenu;



    /**
     * Constructor
     */
    public function __construct()
    {
        $this->remarque = new \Doctrine\Common\Collections\ArrayCollection();
        $this->date=new \Datetime();
        $this->textaudit="Ajouté le ";
    }

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
     * Set date
     *
     * @param string $date
     *
     * @return Rapport
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
     *
     * @return Rapport
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
     *
     * @return Rapport
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
     * Add remarque
     *
     * @param \GAlter\GestionBundle\Entity\RemarqueTuteurRapport $remarque
     *
     * @return Rapport
     */
    public function addRemarque(\GAlter\GestionBundle\Entity\RemarqueTuteurRapport $remarque)
    {
        $this->remarque[] = $remarque;

        return $this;
    }

    /**
     * Remove remarque
     *
     * @param \GAlter\GestionBundle\Entity\RemarqueTuteurRapport $remarque
     */
    public function removeRemarque(\GAlter\GestionBundle\Entity\RemarqueTuteurRapport $remarque)
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
     * Set periodedebut
     *
     * @param string $periodedebut
     *
     * @return Rapport
     */
    public function setPeriodedebut($periodedebut)
    {
        $this->periodedebut = $periodedebut;

        return $this;
    }

    /**
     * Get periodedebut
     *
     * @return string
     */
    public function getPeriodedebut()
    {
        return $this->periodedebut;
    }

    /**
     * Set periodefin
     *
     * @param string $periodefin
     *
     * @return Rapport
     */
    public function setPeriodefin($periodefin)
    {
        $this->periodefin = $periodefin;

        return $this;
    }

    /**
     * Get periodefin
     *
     * @return string
     */
    public function getPeriodefin()
    {
        return $this->periodefin;
    }

    public  function settoCurrentdate(){
        $this->date=new \Datetime();
    }

    public function setvisibilite(){
        $this->textaudit="Modifié le ";
    }

    /**
     * Set textaudit
     *
     * @param string $textaudit
     *
     * @return Rapport
     */
    public function setTextaudit($textaudit)
    {
        $this->textaudit = $textaudit;

        return $this;
    }

    /**
     * Get textaudit
     *
     * @return string
     */
    public function getTextaudit()
    {
        return $this->textaudit;
    }


    /**
     * retourne les rapports d'un etudiant par rapport a une annee
     * @param $annee
     * @param Etudiant $etudiant
     * @return array
     */
    public function rapportParAnnee($annee, $etudiant){
        $rapports=$etudiant->getRapports();

        $rapport_selected[]=array();
        foreach($rapports as $rapport){
            $date=$rapport->getDate();
            if($date->format('Y')==$annee)
                $rapport_selected[]=$rapport;
        }

        return $rapport_selected;

    }
}
