<?php

// src/Acme/DemoBundle/Entity/Document.php
namespace GAlter\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
* @ORM\Entity
 * @ORM\HasLifecycleCallbacks
*/
class Document
{
/**
* @ORM\Id
* @ORM\Column(type="integer")
* @ORM\GeneratedValue(strategy="AUTO")
*/
public $id;


    /**
     * @Assert\File(maxSize="6000000")
     */
    public $file;

/**
* @ORM\Column(type="string", length=255)
* @Assert\NotBlank
*/
public $name;

/**
* @ORM\Column(type="string", length=255, nullable=true)
*/
public $path;


    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload()
    {
        if (null !== $this->file) {
            // faites ce que vous voulez pour générer un nom unique
            $this->path = sha1(uniqid(mt_rand(), true)).'.'.$this->file->guessExtension();
        }
    }

public function getAbsolutePath()
{
return null === $this->path ? null : $this->getUploadRootDir().'/'.$this->path;
}

public function getWebPath()
{
return null === $this->path ? null : $this->getUploadDir().'/'.$this->path;
}

protected function getUploadRootDir()
{
// le chemin absolu du répertoire où les documents uploadés doivent être sauvegardés
return __DIR__.'/../../../../web/'.$this->getUploadDir();
}

protected function getUploadDir()
{
// on se débarrasse de « __DIR__ » afin de ne pas avoir de problème lorsqu'on affiche
// le document/image dans la vue.
return 'uploads/documents';
}

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */


        public function upload()
    {
        if (null === $this->file) {
            return;
        }

        // s'il y a une erreur lors du déplacement du fichier, une exception
        // va automatiquement être lancée par la méthode move(). Cela va empêcher
        // proprement l'entité d'être persistée dans la base de données si
        // erreur il y a
        $this->file->move($this->getUploadRootDir(), $this->path);

        unset($this->file);
    }



    /**
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {
        if ($file = $this->getAbsolutePath()) {
            unlink($file);
        }
    }
}
