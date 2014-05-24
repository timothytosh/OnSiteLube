<?php

namespace OnSiteLube\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmployeeSchedule
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OnSiteLube\AdminBundle\Entity\EmployeeScheduleRepository")
 */
class EmployeeSchedule
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
   * @ORM\ManyToOne(targetEntity="Employee")
   * @ORM\JoinColumn(name="EmployeeId", referencedColumnName="id")
   */
    private $employee;

  /**
   * @ORM\ManyToOne(targetEntity="WorkOrder")
   * @ORM\JoinColumn(name="WorkOrderId", referencedColumnName="id")
   */
    private $workOrder;

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

    /**
     * @var string
     *
     * @ORM\Column(name="StartTimezone", type="string", length=10, nullable=true)
     */
    private $startTimezone;

    /**
     * @var string
     *
     * @ORM\Column(name="EndTimezone", type="string", length=10, nullable=true)
     */
    private $endTimezone;


    /**
     * @var string
     *
     * @ORM\Column(name="Start", type="string", length=30)
     */
    private $start;

    /**
     * @var string
     *
     * @ORM\Column(name="End", type="string", length=30)
     */
    private $end;

    /**
     * @var string
     *
     * @ORM\Column(name="RecurrenceRule", type="string", length=10, nullable=true)
     */
    private $recurrenceRule;

    /**
     * @var integer
     *
     * @ORM\Column(name="RecurrenceId", type="integer", nullable=true)
     */
    private $recurrenceId;


    /**
     * @var string
     *
     * @ORM\Column(name="RecurrenceException", type="string", length=10, nullable=true)
     */
    private $recurrenceException;

    /**
     * @var boolean
     *
     * @ORM\Column(name="IsAllDay", type="boolean")
     */
    private $isAllDay;


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
     * Set taskId
     *
     * @param integer $taskId
     * @return EmployeeSchedule
     */
    public function setTaskId($taskId)
    {
        $this->taskId = $taskId;

        return $this;
    }

    /**
     * Get taskId
     *
     * @return integer 
     */
    public function getTaskId()
    {
        return $this->taskId;
    }

    /**
     * Set ownerId
     *
     * @param integer $ownerId
     * @return EmployeeSchedule
     */
    public function setEmployee($ownerId)
    {
        $this->employee = $ownerId;

        return $this;
    }

    /**
     * Get ownerId
     *
     * @return integer 
     */
    public function getEmployee()
    {
        return $this->employee;
    }

    /**
     * Set startTimezone
     *
     * @param string $startTimezone
     * @return EmployeeSchedule
     */
    public function setStartTimezone($startTimezone)
    {
        $this->startTimezone = $startTimezone;

        return $this;
    }

    /**
     * Get startTimezone
     *
     * @return string 
     */
    public function getStartTimezone()
    {
        return $this->startTimezone;
    }

    /**
     * Set endTimezone
     *
     * @param string $endTimezone
     * @return EmployeeSchedule
     */
    public function setEndTimezone($endTimezone)
    {
        $this->endTimezone = $endTimezone;

        return $this;
    }

    /**
     * Get endTimezone
     *
     * @return string 
     */
    public function getEndTimezone()
    {
        return $this->endTimezone;
    }

    /**
     * Set start
     *
     * @param \DateTime $start
     * @return EmployeeSchedule
     */
    public function setStart($start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Get start
     *
     * @return \DateTime 
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Set end
     *
     * @param \DateTime $end
     * @return EmployeeSchedule
     */
    public function setEnd($end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Get end
     *
     * @return \DateTime 
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Set recurrenceRule
     *
     * @param string $recurrenceRule
     * @return EmployeeSchedule
     */
    public function setRecurrenceRule($recurrenceRule)
    {
        $this->recurrenceRule = $recurrenceRule;

        return $this;
    }

    /**
     * Get recurrenceRule
     *
     * @return string 
     */
    public function getRecurrenceRule()
    {
        return $this->recurrenceRule;
    }

    /**
     * Set recurrenceId
     *
     * @param integer $recurrenceId
     * @return EmployeeSchedule
     */
    public function setRecurrenceId($recurrenceId)
    {
        $this->recurrenceId = $recurrenceId;

        return $this;
    }

    /**
     * Get recurrenceId
     *
     * @return integer 
     */
    public function getRecurrenceId()
    {
        return $this->recurrenceId;
    }

    /**
     * Set recurrenceException
     *
     * @param string $recurrenceException
     * @return EmployeeSchedule
     */
    public function setRecurrenceException($recurrenceException)
    {
        $this->recurrenceException = $recurrenceException;

        return $this;
    }

    /**
     * Get recurrenceException
     *
     * @return string 
     */
    public function getRecurrenceException()
    {
        return $this->recurrenceException;
    }

    /**
     * Set isAllDay
     *
     * @param boolean $isAllDay
     * @return EmployeeSchedule
     */
    public function setIsAllDay($isAllDay)
    {
        $this->isAllDay = $isAllDay;

        return $this;
    }

    /**
     * Get isAllDay
     *
     * @return boolean 
     */
    public function getIsAllDay()
    {
        return $this->isAllDay;
    }
}
