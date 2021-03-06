<?php

namespace OnSiteLube\AdminBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ClockTimeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class BillableTimeRepository extends EntityRepository {

  /**
   * @param $id
   *
   * @return array
   */
  public function findById($id) {
    $dql  = "SELECT bt.id, e.id as employeeId, tc.id as timeCodeId ";
    $dql .= "FROM OnSiteLubeAdminBundle:BillableTime bt join bt.employee e join bt.timeCode tc ";
    $dql .= "where bt.id = :billableTimeId";
    $query = $this->getEntityManager()->createQuery($dql)->setParameters(array('billableTimeId' => $id));
    return $query->getResult();
  }

  /**
   * @param $service
   *
   * @return object
   */
  public static function findRepository($service) {
    return $service->getDoctrine()->getRepository('OnSiteLubeAdminBundle:BillableTime');
  }

}
