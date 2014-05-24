<?php

namespace OnSiteLube\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClockTime
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OnSiteLube\AdminBundle\Entity\ClockTimeRepository")
 */
class ClockTime
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
     * @var \DateTime
     *
     * @ORM\Column(name="InTime", type="time")
     */
    private $inTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="OutTime", type="time")
     */
    private $outTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="EntryDate", type="date")
     */
    private $entryDate;

  /**
   * @ORM\ManyToOne(targetEntity="Employee")
   * @ORM\JoinColumn(name="EmployeeId", referencedColumnName="id")
   */
    private $employee;

  /**
   * @ORM\ManyToOne(targetEntity="TimeCode")
   * @ORM\JoinColumn(name="TimeCodeId", referencedColumnName="id")
   */
    private $timeCode;

  /**
   * @var string
   *
   * @ORM\Column(name="LunchBreak", type="decimal", precision=10, scale=2)
   */
    private $lunchBreak;


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
     * Set inTime
     *
     * @param \DateTime $inTime
     * @return ClockTime
     */
    public function setInTime($inTime)
    {
        $this->inTime = $inTime;

        return $this;
    }

    /**
     * Get inTime
     *
     * @return \DateTime 
     */
    public function getInTime()
    {
        return $this->inTime;
    }

    /**
     * Set outTime
     *
     * @param \DateTime $outTime
     * @return ClockTime
     */
    public function setOutTime($outTime)
    {
        $this->outTime = $outTime;

        return $this;
    }

    /**
     * Get outTime
     *
     * @return \DateTime 
     */
    public function getOutTime()
    {
        return $this->outTime;
    }

    /**
     * Set entryDate
     *
     * @param \DateTime $entryDate
     * @return ClockTime
     */
    public function setEntryDate($entryDate)
    {
        $this->entryDate = $entryDate;

        return $this;
    }

    /**
     * Get entryDate
     *
     * @return \DateTime 
     */
    public function getEntryDate()
    {
        return $this->entryDate;
    }

    /**
     * Set employee
     *
     * @param \stdClass $employee
     * @return ClockTime
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

    /**
     * Set timeCode
     *
     * @param \stdClass $timeCode
     * @return ClockTime
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
}
