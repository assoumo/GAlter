<?php

namespace Proxies\__CG__\GAlter\GestionBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Formation extends \GAlter\GestionBundle\Entity\Formation implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'GAlter\\GestionBundle\\Entity\\Formation' . "\0" . 'id', '' . "\0" . 'GAlter\\GestionBundle\\Entity\\Formation' . "\0" . 'anneeFormationEtudiant', '' . "\0" . 'GAlter\\GestionBundle\\Entity\\Formation' . "\0" . 'libelle', '' . "\0" . 'GAlter\\GestionBundle\\Entity\\Formation' . "\0" . 'description', '' . "\0" . 'GAlter\\GestionBundle\\Entity\\Formation' . "\0" . 'departement', '' . "\0" . 'GAlter\\GestionBundle\\Entity\\Formation' . "\0" . 'responsable');
        }

        return array('__isInitialized__', '' . "\0" . 'GAlter\\GestionBundle\\Entity\\Formation' . "\0" . 'id', '' . "\0" . 'GAlter\\GestionBundle\\Entity\\Formation' . "\0" . 'anneeFormationEtudiant', '' . "\0" . 'GAlter\\GestionBundle\\Entity\\Formation' . "\0" . 'libelle', '' . "\0" . 'GAlter\\GestionBundle\\Entity\\Formation' . "\0" . 'description', '' . "\0" . 'GAlter\\GestionBundle\\Entity\\Formation' . "\0" . 'departement', '' . "\0" . 'GAlter\\GestionBundle\\Entity\\Formation' . "\0" . 'responsable');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Formation $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setLibelle($libelle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLibelle', array($libelle));

        return parent::setLibelle($libelle);
    }

    /**
     * {@inheritDoc}
     */
    public function getLibelle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLibelle', array());

        return parent::getLibelle();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', array($description));

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', array());

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDepartement($departement)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDepartement', array($departement));

        return parent::setDepartement($departement);
    }

    /**
     * {@inheritDoc}
     */
    public function getDepartement()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDepartement', array());

        return parent::getDepartement();
    }

    /**
     * {@inheritDoc}
     */
    public function addAnneeFormationEtudiant(\GAlter\GestionBundle\Entity\AnneeFormationEtudiant $anneeFormationEtudiant)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAnneeFormationEtudiant', array($anneeFormationEtudiant));

        return parent::addAnneeFormationEtudiant($anneeFormationEtudiant);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAnneeFormationEtudiant(\GAlter\GestionBundle\Entity\AnneeFormationEtudiant $anneeFormationEtudiant)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAnneeFormationEtudiant', array($anneeFormationEtudiant));

        return parent::removeAnneeFormationEtudiant($anneeFormationEtudiant);
    }

    /**
     * {@inheritDoc}
     */
    public function getAnneeFormationEtudiant()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAnneeFormationEtudiant', array());

        return parent::getAnneeFormationEtudiant();
    }

    /**
     * {@inheritDoc}
     */
    public function addResponsable(\GAlter\UserBundle\Entity\Responsable $responsable)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addResponsable', array($responsable));

        return parent::addResponsable($responsable);
    }

    /**
     * {@inheritDoc}
     */
    public function removeResponsable(\GAlter\UserBundle\Entity\Responsable $responsable)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeResponsable', array($responsable));

        return parent::removeResponsable($responsable);
    }

    /**
     * {@inheritDoc}
     */
    public function getResponsable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getResponsable', array());

        return parent::getResponsable();
    }

}
