<?php

  namespace OnSiteLube\AdminBundle\Entity;

  use Doctrine\ORM\Mapping as ORM;

  /**
   * CompanyLocation
   *
   * @ORM\Table()
   * @ORM\Entity(repositoryClass="OnSiteLube\AdminBundle\Entity\CompanyLocationRepository")
   */
  class CompanyLocation {
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
     * @ORM\Column(name="Name", type="string", length=45)
     */
    private $name;


    /**
     * @ORM\OneToOne(targetEntity="Address")
     * @ORM\JoinColumn(name="AddressId", referencedColumnName="id")
     */
    private $address;

    /**
     * @ORM\OneToMany(targetEntity="Employee", mappedBy="CompanyLocation")
     */
    private $employees;

    /**
     * @ORM\OneToMany(targetEntity="CompanyVehicle", mappedBy="CompanyLocation")
     */
    private $vehicles;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
      return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return CompanyLocation
     */
    public function setName($name) {
      $this->name = $name;

      return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName() {
      return $this->name;
    }

    /**
     * Set address
     *
     * @param \OnSiteLube\AdminBundle\Entity\Address $address
     *
     * @return CompanyLocation
     */
    public function setAddress(\OnSiteLube\AdminBundle\Entity\Address $address = null) {
      $this->address = $address;

      return $this;
    }

    /**
     * Get address
     *
     * @return \OnSiteLube\AdminBundle\Entity\Address
     */
    public function getAddress() {
      return $this->address;
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
     * @return CompanyLocation
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

    /**
     * Add vehicles
     *
     * @param \OnSiteLube\AdminBundle\Entity\CompanyVehicle $vehicles
     * @return CompanyLocation
     */
    public function addVehicle(\OnSiteLube\AdminBundle\Entity\CompanyVehicle $vehicles)
    {
        $this->vehicles[] = $vehicles;

        return $this;
    }

    /**
     * Remove vehicles
     *
     * @param \OnSiteLube\AdminBundle\Entity\CompanyVehicle $vehicles
     */
    public function removeVehicle(\OnSiteLube\AdminBundle\Entity\CompanyVehicle $vehicles)
    {
        $this->vehicles->removeElement($vehicles);
    }

    /**
     * Get vehicles
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getVehicles()
    {
        return $this->vehicles;
    }
}
