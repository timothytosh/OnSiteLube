<?php

  namespace OnSiteLube\AdminBundle\Entity;

  use Doctrine\ORM\EntityRepository;

  /**
   * AclRepository
   *
   * This class was generated by the Doctrine ORM. Add your own custom
   * repository methods below.
   */
  class AddressRepository extends EntityRepository {


    /**
     * @return array
     */
    public function findAll() {
      $dql = "SELECT a.id, a.address, a.address2, a.city, a.state, a.postalCode, a.country FROM OnSiteLubeAdminBundle:Address a";
      $query = $this->getEntityManager()->createQuery($dql);
      return $query->getResult();
    }

    /**
     * @param $service
     *
     * @return object
     */
    public static function findRepository($service) {
      return $service->getDoctrine()->getRepository('OnSiteLubeAdminBundle:Address');
    }


  }
