<?php

namespace OnSiteLube\AdminBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * CustomerRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CustomerRepository extends EntityRepository {

  /**
   * @return array
   */
  public function findAllForAutoComplete() {
    $dql  = "SELECT c.id as customerId, c.name ";
    $dql .= "FROM OnSiteLubeAdminBundle:Customer c";
    $query = $this->getEntityManager()->createQuery($dql);
    return $query->getResult();
  }

  /**
   * @param $id
   *
   * @return array
   */
  public function findCustomerById($id) {
    $dql  = "SELECT c.id as customerId, c.name, a.city, a.state, a.postalCode, c.phone, c.taxable, c.active ";
    $dql .= "FROM OnSiteLubeAdminBundle:Customer c join c.address a ";
    $dql .= "where c.id = :customerId";
    $query = $this->getEntityManager()->createQuery($dql)->setParameters(array('customerId' => $id));
    return $query->getResult();
  }

  /**
   * @param $service
   *
   * @return object
   */
  public static function findRepository($service) {
    return $service->getDoctrine()->getRepository('OnSiteLubeAdminBundle:Customer');
  }
}