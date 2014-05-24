<?php

namespace OnSiteLube\AdminBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * JobServiceRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class JobServiceRepository extends EntityRepository {

  /**
   * @param $id
   * @return array
   */
  public function findByEmployeeId($id) {
    $dql  = "select e.id as employeeId, js.id as jobServiceId, js.name as jobServiceName, js.hours, js.billable, ";
    $dql .= "wo.id as workOrderId, wo.serviceDate, wo.serviceTime, c.name as customer, v.unitNumber, cl.name as location ";
    $dql .= "from OnSiteLubeAdminBundle:Employee e join e.jobServices js ";
    $dql .= "join js.workOrder wo join wo.customer c join js.vehicle v join wo.customerLocation cl ";
    $dql .= "where e.id = :employeeId";
    $query = $this->getEntityManager()->createQuery($dql)->setParameters(array('employeeId' => $id));
    return $query->getResult();
  }


  /**
   * @param $id
   * @return array
   */
  public function findByJobServiceId($id) {
    $dql  = "select e.id as employeeId, js.id as jobServiceId, js.name as jobServiceName, js.hours, js.billable, ";
    $dql .= "wo.id as workOrderId, wo.serviceDate, wo.serviceTime, c.name as customer, v.unitNumber, cl.name as location ";
    $dql .= "from OnSiteLubeAdminBundle:Employee e join e.jobServices js ";
    $dql .= "join js.workOrder wo join wo.customer c join js.vehicle v join wo.customerLocation cl ";
    $dql .= "where js.id = :jobServiceId";
    $query = $this->getEntityManager()->createQuery($dql)->setParameters(array('jobServiceId' => $id));
    return $query->getResult();
  }


  /**
   * @param $workOrderId
   * @param $userAccountId
   * @return array
   */
  public function findByWorkOrderId($workOrderId, $userAccountId) {
    $dql  = "select e.id as employeeId, js.id as jobServiceId, js.name, js.hours, js.billable, ";
    $dql .= "v.unitNumber, cl.name as location, ";
    $dql .= "(select bts.id FROM OnSiteLubeAdminBundle:BillableTime bts where bts.jobService = js.id) as billableTimeId ";
    $dql .= "from OnSiteLubeAdminBundle:Employee e join e.jobServices js join e.userAccount ua ";
    $dql .= "join js.workOrder wo join wo.customer c join js.vehicle v join wo.customerLocation cl ";
    $dql .= "where wo.id = :workOrderId and ua.id = :userAccountId";
    $query = $this->getEntityManager()->createQuery($dql)->setParameters(array('workOrderId' => $workOrderId, 'userAccountId' => $userAccountId));
    return $query->getResult();
  }

  /**
   * @param $input
   * @return BillableTime
   */
  public function updateBillableTimeForJobService($input) {

    $em = $this->getEntityManager();
    $userAccount = $em->getRepository('OnSiteLubeAdminBundle:UserAccount')->find($input->userAccountId);
    $employee = $em->getRepository('OnSiteLubeAdminBundle:Employee')->findOneBy(array('userAccount' => $userAccount));
    $jobService = $em->getRepository('OnSiteLubeAdminBundle:JobService')->find($input->jobServiceId);
    $timeCode = $em->getRepository('OnSiteLubeAdminBundle:TimeCode')->find(1);
    $billableTime = $em->getRepository('OnSiteLubeAdminBundle:BillableTime')->find($input->billableTimeId);

    if(!$billableTime)
      $billableTime = new BillableTime();

    $billableTime->setEntryHours($input->entryHours);
    $billableTime->setEntryDate(new \DateTime(date("Y-m-d")));
    $billableTime->setTimeCode($timeCode);
    $billableTime->setIsBillable(true);
    $billableTime->setEmployee($employee);
    $billableTime->setJobService($jobService);

    $em->persist($billableTime);
    $em->flush();

    return $billableTime;
  }

  /**
   * @param $service
   *
   * @return object
   */
  public static function findRepository($service) {
    return $service->getDoctrine()->getRepository('OnSiteLubeAdminBundle:JobService');
  }
}
