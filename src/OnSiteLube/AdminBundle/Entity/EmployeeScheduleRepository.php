<?php

namespace OnSiteLube\AdminBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * EmployeeScheduleRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EmployeeScheduleRepository extends EntityRepository {

  /**
   * @param $id
   * @return array
   */
  public function findCalendarEventsForEmployeeCurrentDay($id) {
    $dql  = "select wo.id as WorkOrderId, e.id as EmployeeId, c.name as Title, wo.description as Description, es.recurrenceRule as RecurrenceRule, ";
    $dql  .= "es.startTimezone as StartTimezone, es.endTimezone as EndTimezone, es.start as StartDateTime, es.end as EndDateTime, ";
    $dql  .= "es.recurrenceId as RecurrenceId, es.recurrenceException as RecurrenceException, es.isAllDay as IsAllDay ";
    $dql  .= "from OnSiteLubeAdminBundle:EmployeeSchedule es join es.employee e join es.workOrder wo join wo.customer c join e.userAccount ua ";
    $dql  .= "where ua.id = :userAccountId and wo.serviceDate = :serviceDate";
    $query = $this->getEntityManager()->createQuery($dql)->setParameters(array('userAccountId' => $id, 'serviceDate' => date("Y-m-d")));
    return $query->getResult();
  }

  /**
   * @param $service
   *
   * @return object
   */
  public static function findRepository($service) {
    return $service->getDoctrine()->getRepository('OnSiteLubeAdminBundle:EmployeeSchedule');
  }
}