<?php

  namespace OnSiteLube\AdminBundle\Entity;

  use Doctrine\ORM\EntityRepository;

  /**
   * AclRepository
   *
   * This class was generated by the Doctrine ORM. Add your own custom
   * repository methods below.
   */
  class GenderRepository extends EntityRepository {

    /**
     * @param $service
     *
     * @return object
     */
    public static function findRepository($service) {
      return $service->getDoctrine()->getRepository('OnSiteLubeAdminBundle:Gender');
    }


  }