<?php

namespace OnSiteLube\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Employee
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OnSiteLube\AdminBundle\Entity\EmployeeRepository")
 */
class Employee {
  /**
   * @var integer
   *
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @return mixed
   */
  public function getJobServices() {
    return $this->jobServices;
  }

  /**
   * @param mixed $jobServices
   */
  public function setJobServices($jobServices) {
    $this->jobServices = $jobServices;
  }

  /**
   * @var string
   *
   * @ORM\Column(name="EmployeeId", type="string", length=100)
   */
  private $employeeId;

  /**
   * @var \DateTime
   *
   * @ORM\Column(name="HireDate", type="date")
   */
  private $hireDate;

  /**
   * @var boolean
   *
   * @ORM\Column(name="IsActive", type="boolean")
   */
  private $isActive;

  /**
   * @ORM\OneToOne(targetEntity="UserAccount")
   * @ORM\JoinColumn(name="UserAccountId", referencedColumnName="id")
   */
  private $userAccount;


  /**
   * @ORM\ManyToOne(targetEntity="CompanyLocation")
   * @ORM\JoinColumn(name="CompanyLocationId", referencedColumnName="id")
   */
  private $companyLocation;

  /**
   * @ORM\OneToOne(targetEntity="Address")
   * @ORM\JoinColumn(name="AddressId", referencedColumnName="id")
   */
  private $address;

  /**
   * @ORM\ManyToOne(targetEntity="CompanyVehicle")
   * @ORM\JoinColumn(name="CompanyVehicleId", referencedColumnName="id")
   */
  private $companyVehicle;


  /**
   * Owning Side
   *
   * @ORM\ManyToMany(targetEntity="JobService", inversedBy="employee")
   * @ORM\JoinTable(name="JobServiceEmployee",
   *      joinColumns={@ORM\JoinColumn(name="employeeId", referencedColumnName="id")},
   *      inverseJoinColumns={@ORM\JoinColumn(name="jobServiceId", referencedColumnName="id")}
   *      )
   */
  private $jobServices;


  /**
   * Get id
   *
   * @return integer
   */
  public function getId() {
    return $this->id;
  }

  /**
   * Set employeeId
   *
   * @param string $employeeId
   * @return Employee
   */
  public function setEmployeeId($employeeId) {
    $this->employeeId = $employeeId;

    return $this;
  }

  /**
   * Get employeeId
   *
   * @return string
   */
  public function getEmployeeId() {
    return $this->employeeId;
  }

  /**
   * Set hireDate
   *
   * @param \DateTime $hireDate
   * @return Employee
   */
  public function setHireDate($hireDate) {
    $this->hireDate = $hireDate;

    return $this;
  }

  /**
   * Get hireDate
   *
   * @return \DateTime
   */
  public function getHireDate() {
    return $this->hireDate;
  }

  /**
   * Set isActive
   *
   * @param boolean $isActive
   * @return Employee
   */
  public function setIsActive($isActive) {
    $this->isActive = $isActive;

    return $this;
  }

  /**
   * Get isActive
   *
   * @return boolean
   */
  public function getIsActive() {
    return $this->isActive;
  }

  /**
   * Set userAccount
   *
   * @param \OnSiteLube\AdminBundle\Entity\UserAccount $userAccount
   * @return Employee
   */
  public function setUserAccount(\OnSiteLube\AdminBundle\Entity\UserAccount $userAccount = null) {
    $this->userAccount = $userAccount;

    return $this;
  }

  /**
   * Get userAccount
   *
   * @return \OnSiteLube\AdminBundle\Entity\UserAccount
   */
  public function getUserAccount() {
    return $this->userAccount;
  }

  /**
   * Set address
   *
   * @param \OnSiteLube\AdminBundle\Entity\Address $address
   * @return Employee
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
   * Set companyLocation
   *
   * @param \OnSiteLube\AdminBundle\Entity\CompanyLocation $companyLocation
   * @return Employee
   */
  public function setCompanyLocation(\OnSiteLube\AdminBundle\Entity\CompanyLocation $companyLocation = null) {
    $this->companyLocation = $companyLocation;

    return $this;
  }

  /**
   * Get companyLocation
   *
   * @return \OnSiteLube\AdminBundle\Entity\CompanyLocation
   */
  public function getCompanyLocation() {
    return $this->companyLocation;
  }

  /**
   * Set companyVehicle
   *
   * @param \OnSiteLube\AdminBundle\Entity\CompanyVehicle $companyVehicle
   * @return Employee
   */
  public function setCompanyVehicle(\OnSiteLube\AdminBundle\Entity\CompanyVehicle $companyVehicle = null) {
    $this->companyVehicle = $companyVehicle;

    return $this;
  }

  /**
   * Get companyVehicle
   *
   * @return \OnSiteLube\AdminBundle\Entity\CompanyVehicle
   */
  public function getCompanyVehicle() {
    return $this->companyVehicle;
  }
}
