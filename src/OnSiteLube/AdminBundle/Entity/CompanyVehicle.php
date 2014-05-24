<?php

namespace OnSiteLube\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompanyVehicle
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OnSiteLube\AdminBundle\Entity\CompanyVehicleRepository")
 */
class CompanyVehicle
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
     * @var string
     *
     * @ORM\Column(name="UnitNumber", type="string", length=45)
     */
    private $unitNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="VIN", type="string", length=45)
     */
    private $vin;

    /**
     * @var string
     *
     * @ORM\Column(name="Tag", type="string", length=25)
     */
    private $tag;

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
   * @ORM\ManyToOne(targetEntity="CompanyLocation")
   * @ORM\JoinColumn(name="CompanyLocationId", referencedColumnName="id")
   */
    private $companyLocation;


  /**
   * @ORM\OneToMany(targetEntity="Employee", mappedBy="CompanyVehicle")
   */
  private $employees;


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
     * Set unitNumber
     *
     * @param string $unitNumber
     * @return CompanyVehicle
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
     * Set vIN
     *
     * @param string $vIN
     * @return CompanyVehicle
     */
    public function setVIN($vIN)
    {
        $this->vin = $vIN;

        return $this;
    }

    /**
     * Get vIN
     *
     * @return string 
     */
    public function getVIN()
    {
        return $this->vin;
    }

    /**
     * Set tag
     *
     * @param string $tag
     * @return CompanyVehicle
     */
    public function setTag($tag)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get tag
     *
     * @return string 
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Set year
     *
     * @param integer $year
     * @return CompanyVehicle
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
     * @return CompanyVehicle
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
     * Set model
     *
     * @param string $model
     * @return CompanyVehicle
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string 
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set companyLocation
     *
     * @param \OnSiteLube\AdminBundle\Entity\CompanyLocation $companyLocation
     * @return CompanyVehicle
     */
    public function setCompanyLocation(\OnSiteLube\AdminBundle\Entity\CompanyLocation $companyLocation = null)
    {
        $this->companyLocation = $companyLocation;

        return $this;
    }

    /**
     * Get companyLocation
     *
     * @return \OnSiteLube\AdminBundle\Entity\CompanyLocation 
     */
    public function getCompanyLocation()
    {
        return $this->companyLocation;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->employees = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add employees
     *
     * @param \OnSiteLube\AdminBundle\Entity\Employee $employees
     * @return CompanyVehicle
     */
    public function addEmployee(\OnSiteLube\AdminBundle\Entity\Employee $employees)
    {
        $this->employees[] = $employees;

        return $this;
    }

    /**
     * Remove employees
     *
     * @param \OnSiteLube\AdminBundle\Entity\Employee $employees
     */
    public function removeEmployee(\OnSiteLube\AdminBundle\Entity\Employee $employees)
    {
        $this->employees->removeElement($employees);
    }

    /**
     * Get employees
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEmployees()
    {
        return $this->employees;
    }
}
