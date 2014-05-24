<?php

namespace OnSiteLube\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JobService
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OnSiteLube\AdminBundle\Entity\JobServiceRepository")
 */
class JobService
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
   * @ORM\ManyToOne(targetEntity="CustomerVehicle")
   * @ORM\JoinColumn(name="VehicleId", referencedColumnName="id")
   */
  private $vehicle;

    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=45)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="Hours", type="decimal", precision=10, scale=2)
     */
    private $hours;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Billable", type="boolean")
     */
    private $billable;

    /**
     * @var string
     *
     * @ORM\Column(name="LaborCost", type="decimal",  precision=10, scale=2)
     */
    private $laborCost;


    /**
     * Inverse Side
     *
     * @ORM\ManyToMany(targetEntity="Employee", mappedBy="jobService")
     */
    private $employees;

  /**
   * @ORM\ManyToOne(targetEntity="WorkOrder")
   * @ORM\JoinColumn(name="WorkOrderId", referencedColumnName="id")
   */
  private $workOrder;



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
     * Set name
     *
     * @param string $name
     * @return JobService
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return JobService
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set hours
     *
     * @param string $hours
     * @return JobService
     */
    public function setHours($hours)
    {
        $this->hours = $hours;

        return $this;
    }

    /**
     * Get hours
     *
     * @return string
     */
    public function getHours()
    {
        return $this->hours;
    }

    /**
     * Set billable
     *
     * @param boolean $billable
     * @return JobService
     */
    public function setBillable($billable)
    {
        $this->billable = $billable;

        return $this;
    }

    /**
     * Get billable
     *
     * @return boolean
     */
    public function getBillable()
    {
        return $this->billable;
    }

    /**
     * Set laborCost
     *
     * @param string $laborCost
     * @return JobService
     */
    public function setLaborCost($laborCost)
    {
        $this->laborCost = $laborCost;

        return $this;
    }

    /**
     * Get laborCost
     *
     * @return string
     */
    public function getLaborCost()
    {
        return $this->laborCost;
    }

    /**
     * @return mixed
     */
    public function getEmployees() {
        return $this->employees;
    }

    /**
     * @param mixed $employees
     */
    public function setEmployees($employees) {
        $this->employees = $employees;
    }

    /**
     * @return mixed
     */
    public function getVehicle() {
        return $this->vehicle;
    }

    /**
     * @param mixed $vehicle
     */
    public function setVehicle($vehicle) {
        $this->vehicle = $vehicle;
    }

    /**
     * @return mixed
     */
    public function getWorkOrder() {
        return $this->workOrder;
    }

    /**
     * @param mixed $workOrder
     */
    public function setWorkOrder($workOrder) {
        $this->workOrder = $workOrder;
    }
}
