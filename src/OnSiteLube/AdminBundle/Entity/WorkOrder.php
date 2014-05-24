<?php

namespace OnSiteLube\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WorkOrder
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OnSiteLube\AdminBundle\Entity\WorkOrderRepository")
 */
class WorkOrder {
  /**
   * @var integer
   *
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @ORM\ManyToOne(targetEntity="Customer")
   * @ORM\JoinColumn(name="CustomerId", referencedColumnName="id")
   */
  private $customer;


  /**
   * @var string
   *
   * @ORM\Column(name="Description", type="string", length=255)
   */
  private $description;

  /**
   * @var string
   *
   * @ORM\Column(name="ServiceDate", type="string", length=10)
   */
  private $serviceDate;

  /**
   * @var string
   *
   * @ORM\Column(name="ServiceTime", type="string", length=5)
   */
  private $serviceTime;

  /**
   * @ORM\ManyToOne(targetEntity="CustomerLocation")
   * @ORM\JoinColumn(name="CustomerLocationId", referencedColumnName="id")
   */
  private $customerLocation;

  /**
   * @ORM\OneToMany(targetEntity="JobService", mappedBy="WorkOrder")
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
   * @return mixed
   */
  public function getCustomer() {
    return $this->customer;
  }

  /**
   * @param mixed $customer
   */
  public function setCustomer($customer) {
    $this->customer = $customer;
  }

  /**
   * @return mixed
   */
  public function getCustomerLocation() {
    return $this->customerLocation;
  }

  /**
   * @param mixed $customerLocation
   */
  public function setCustomerLocation($customerLocation) {
    $this->customerLocation = $customerLocation;
  }

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
   * Set description
   *
   * @param string $description
   * @return WorkOrder
   */
  public function setDescription($description) {
    $this->description = $description;

    return $this;
  }

  /**
   * Get description
   *
   * @return string
   */
  public function getDescription() {
    return $this->description;
  }

  /**
   * Set serviceDate
   *
   * @param string $serviceDate
   * @return WorkOrder
   */
  public function setServiceDate($serviceDate) {
    $this->serviceDate = $serviceDate;

    return $this;
  }

  /**
   * Get serviceDate
   *
   * @return string
   */
  public function getServiceDate() {
    return $this->serviceDate;
  }

  /**
   * Set serviceTime
   *
   * @param string $serviceTime
   * @return WorkOrder
   */
  public function setServiceTime($serviceTime) {
    $this->serviceTime = $serviceTime;

    return $this;
  }

  /**
   * Get serviceTime
   *
   * @return string
   */
  public function getServiceTime() {
    return $this->serviceTime;
  }

}
