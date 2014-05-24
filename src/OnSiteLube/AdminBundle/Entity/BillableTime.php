<?php

namespace OnSiteLube\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClockTime
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OnSiteLube\AdminBundle\Entity\BillableTimeRepository")
 */
class BillableTime
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
   * @ORM\ManyToOne(targetEntity="TimeCode")
   * @ORM\JoinColumn(name="TimeCodeId", referencedColumnName="id")
   */
    private $timeCode;


  /**
   * @ORM\ManyToOne(targetEntity="Employee")
   * @ORM\JoinColumn(name="EmployeeId", referencedColumnName="id")
   */
    private $employee;

  /**
   * @ORM\ManyToOne(targetEntity="JobService")
   * @ORM\JoinColumn(name="JobServiceId", referencedColumnName="id")
   */
  private $jobService;


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
     * Set timeCode
     *
     * @param \stdClass $timeCode
     * @return BillableTime
     */
    public function setTimeCode($timeCode)
    {
        $this->timeCode = $timeCode;

        return $this;
    }

    /**
     * Get timeCode
     *
     * @return \stdClass 
     */
    public function getTimeCode()
    {
        return $this->timeCode;
    }

    /**
     * Set jobService
     *
     * @param \stdClass $jobService
     * @return BillableTime
     */
    public function setJobService($jobService)
    {
        $this->jobService = $jobService;

        return $this;
    }

    /**
     * Get jobService
     *
     * @return \stdClass 
     */
    public function getJobService()
    {
        return $this->jobService;
    }

    /**
     * Set employee
     *
     * @param \stdClass $employee
     * @return BillableTime
     */
    public function setEmployee($employee)
    {
        $this->employee = $employee;

        return $this;
    }

    /**
     * Get employee
     *
     * @return \stdClass 
     */
    public function getEmployee()
    {
        return $this->employee;
    }
}
