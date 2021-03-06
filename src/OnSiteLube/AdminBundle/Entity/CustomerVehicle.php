<?php

namespace OnSiteLube\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerVehicle
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OnSiteLube\AdminBundle\Entity\CustomerVehicleRepository")
 */
class CustomerVehicle
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
   * @ORM\ManyToOne(targetEntity="ServiceSchedule")
   * @ORM\JoinColumn(name="ServiceScheduleId", referencedColumnName="id")
   */
    private $serviceScheduleId;

  /**
   * @ORM\ManyToOne(targetEntity="Customer")
   * @ORM\JoinColumn(name="CustomerId", referencedColumnName="id")
   */
    private $customerId;

    /**
     * @var integer
     *
     * @ORM\Column(name="LocationId", type="integer")
     */
    private $locationId;

  /**
   * @return int
   */
  public function getCustomerLocationId()
  {
    return $this->$locationId;
  }

  /**
   * @param int $customerLocationId
   */
  public function setCustomerLocationId($customerLocationId)
  {
    $this->$locationId = $customerLocationId;
  }

    /**
     * @var string
     *
     * @ORM\Column(name="UnitNumber", type="string", length=45)
     */
    private $unitNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="VINNumber", type="string", length=45)
     */
    private $vINNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="TagNumber", type="string", length=45)
     */
    private $tagNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="Year", type="integer")
     */
    private $year;

    /**
     * @var string
     *
     * @ORM\Column(name="Make", type="string", length=45)
     */
    private $make;

  /**
   * @var string
   *
   * @ORM\Column(name="Model", type="string", length=45)
   */
    private $model;




    /**
     * @var string
     *
     * @ORM\Column(name="Engine", type="string", length=45)
     */
    private $engine;
	
	/**
     * @var string
     *
     * @ORM\Column(name="Parking", type="string", length=255)
     */
    private $parking;

  /**
   * @return string
   */
  public function getModel()
  {
    return $this->model;
  }

  /**
   * @param string $model
   */
  public function setModel($model)
  {
    $this->model = $model;
  }

  /**
   * @return string
   */
  public function getParking()
  {
    return $this->parking;
  }

  /**
   * @param string $parking
   */
  public function setParking($parking)
  {
    $this->parking = $parking;
  }

  /**
   * @return mixed
   */
  public function getServiceScheduleId()
  {
    return $this->serviceScheduleId;
  }

  /**
   * @param mixed $serviceScheduleId
   */
  public function setServiceScheduleId($serviceScheduleId)
  {
    $this->serviceScheduleId = $serviceScheduleId;
  }

  /**
   * @return mixed
   */
  public function getCustomerId()
  {
    return $this->customerId;
  }

  /**
   * @param mixed $customerId
   */
  public function setCustomerId($customerId)
  {
    $this->customerId = $customerId;
  }

    /**
     * @ORM\ManyToOne(targetEntity="CustomerLocation")
     * @ORM\JoinColumn(name="LocationId", referencedColumnName="id")
     */
    private $customerLocation;

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
     * Set locationId
     *
     * @param integer $locationId
     * @return CustomerVehicle
     */
    public function setLocationId($locationId)
    {
        $this->$locationId = $locationId;

        return $this;
    }

    /**
     * Get locationId
     *
     * @return integer 
     */
    public function getLocationId()
    {
        return $this->$locationId;
    }

    /**
     * Set unitNumber
     *
     * @param string $unitNumber
     * @return CustomerVehicle
     */
    public function setUnitNumber($unitNumber)
    {
        $this->unitNumber = $unitNumber;

        return $this;
    }

    /**
     * Get unitNumber
     *
     * @return string 
     */
    public function getUnitNumber()
    {
        return $this->unitNumber;
    }

    /**
     * Set vINNumber
     *
     * @param string $vINNumber
     * @return CustomerVehicle
     */
    public function setVINNumber($vINNumber)
    {
        $this->vINNumber = $vINNumber;

        return $this;
    }

    /**
     * Get vINNumber
     *
     * @return string 
     */
    public function getVINNumber()
    {
        return $this->vINNumber;
    }

    /**
     * Set tagNumber
     *
     * @param string $tagNumber
     * @return CustomerVehicle
     */
    public function setTagNumber($tagNumber)
    {
        $this->tagNumber = $tagNumber;

        return $this;
    }

    /**
     * Get tagNumber
     *
     * @return string 
     */
    public function getTagNumber()
    {
        return $this->tagNumber;
    }

    /**
     * Set year
     *
     * @param integer $year
     * @return CustomerVehicle
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return integer 
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set make
     *
     * @param string $make
     * @return CustomerVehicle
     */
    public function setMake($make)
    {
        $this->make = $make;

        return $this;
    }

    /**
     * Get make
     *
     * @return string 
     */
    public function getMake()
    {
        return $this->make;
    }

    /**
     * Set engine
     *
     * @param string $engine
     * @return CustomerVehicle
     */
    public function setEngine($engine)
    {
        $this->engine = $engine;

        return $this;
    }

    /**
     * Get engine
     *
     * @return string 
     */
    public function getEngine()
    {
        return $this->engine;
    }

    /**
     * Set customerLocation
     *
     * @param \OnSiteLube\AdminBundle\Entity\CustomerLocation $customerLocation
     * @return CustomerVehicle
     */
    public function setCustomerLocation(\OnSiteLube\AdminBundle\Entity\CustomerLocation $customerLocation = null)
    {
        $this->$customerLocation = $customerLocation;

        return $this;
    }

    /**
     * Get companyLocation
     *
     * @return \OnSiteLube\AdminBundle\Entity\CompanyLocation
     */
    public function getCustomerLocation()
    {
        return $this->customerLocation;
    }
}
