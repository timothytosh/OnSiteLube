<?php

namespace Proxies\__CG__\OnSiteLube\AdminBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class CompanyVehicle extends \OnSiteLube\AdminBundle\Entity\CompanyVehicle implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'id', 'unitNumber', 'vin', 'tag', 'year', 'make', 'model', 'companyLocation', 'employees');
        }

        return array('__isInitialized__', 'id', 'unitNumber', 'vin', 'tag', 'year', 'make', 'model', 'companyLocation', 'employees');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (CompanyVehicle $proxy) {
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
    public function setUnitNumber($unitNumber)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUnitNumber', array($unitNumber));

        return parent::setUnitNumber($unitNumber);
    }

    /**
     * {@inheritDoc}
     */
    public function getUnitNumber()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUnitNumber', array());

        return parent::getUnitNumber();
    }

    /**
     * {@inheritDoc}
     */
    public function setVIN($vIN)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVIN', array($vIN));

        return parent::setVIN($vIN);
    }

    /**
     * {@inheritDoc}
     */
    public function getVIN()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVIN', array());

        return parent::getVIN();
    }

    /**
     * {@inheritDoc}
     */
    public function setTag($tag)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTag', array($tag));

        return parent::setTag($tag);
    }

    /**
     * {@inheritDoc}
     */
    public function getTag()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTag', array());

        return parent::getTag();
    }

    /**
     * {@inheritDoc}
     */
    public function setYear($year)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setYear', array($year));

        return parent::setYear($year);
    }

    /**
     * {@inheritDoc}
     */
    public function getYear()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getYear', array());

        return parent::getYear();
    }

    /**
     * {@inheritDoc}
     */
    public function setMake($make)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMake', array($make));

        return parent::setMake($make);
    }

    /**
     * {@inheritDoc}
     */
    public function getMake()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMake', array());

        return parent::getMake();
    }

    /**
     * {@inheritDoc}
     */
    public function setModel($model)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModel', array($model));

        return parent::setModel($model);
    }

    /**
     * {@inheritDoc}
     */
    public function getModel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModel', array());

        return parent::getModel();
    }

    /**
     * {@inheritDoc}
     */
    public function setCompanyLocation(\OnSiteLube\AdminBundle\Entity\CompanyLocation $companyLocation = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCompanyLocation', array($companyLocation));

        return parent::setCompanyLocation($companyLocation);
    }

    /**
     * {@inheritDoc}
     */
    public function getCompanyLocation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCompanyLocation', array());

        return parent::getCompanyLocation();
    }

    /**
     * {@inheritDoc}
     */
    public function addEmployee(\OnSiteLube\AdminBundle\Entity\Employee $employees)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addEmployee', array($employees));

        return parent::addEmployee($employees);
    }

    /**
     * {@inheritDoc}
     */
    public function removeEmployee(\OnSiteLube\AdminBundle\Entity\Employee $employees)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeEmployee', array($employees));

        return parent::removeEmployee($employees);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmployees()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmployees', array());

        return parent::getEmployees();
    }

}