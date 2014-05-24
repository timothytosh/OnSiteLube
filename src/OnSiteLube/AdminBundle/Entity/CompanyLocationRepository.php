<?php

  namespace OnSiteLube\AdminBundle\Entity;

  use Doctrine\ORM\EntityRepository;

  /**
   * CompanyLocationRepository
   *
   * This class was generated by the Doctrine ORM. Add your own custom
   * repository methods below.
   */
  class CompanyLocationRepository extends EntityRepository {


    /**
     * @return array
     */
    public function findAll() {
      $dql = "SELECT c.id, c.name, a.id as addressId, a.address FROM OnSiteLubeAdminBundle:CompanyLocation c join c.address a";
      $query = $this->getEntityManager()->createQuery($dql);
      return $query->getResult();
    }

    /**
     * @param $id
     *
     * @return array
     */
    public function findById($id) {
      $dql  = "SELECT cl.id as locationId, cl.name, a.address, a.city, a.state, a.postalCode ";
      $dql .= "FROM OnSiteLubeAdminBundle:CompanyLocation cl join cl.address a ";
      $dql .= "where cl.id = :locationId";
      $query = $this->getEntityManager()->createQuery($dql)
          ->setParameters(array('locationId' => $id));
      return $query->getResult();
    }

    /**
     * @return array
     */
    public function findAllForAutoComplete() {
      $dql  = "SELECT cl.id as locationId, cl.name ";
      $dql .= "FROM OnSiteLubeAdminBundle:CompanyLocation cl";
      $query = $this->getEntityManager()->createQuery($dql);
      return $query->getResult();
    }

    /**
     * @param $input
     *
     * @return CompanyLocation
     */
    public function addCompanyLocation($input) {
      $em = $this->getEntityManager();

      $companyLocation = new CompanyLocation();
      $address = new Address();

      $companyLocation->setName($input->name);
      $companyLocation->setAddress($address);

      $address = $companyLocation->getAddress();
      $address->setAddress($input->address);
      $address->setCity($input->city);
      $address->setState($input->state);
      $address->setPostalCode($input->postalCode);
      $address->setCountry('United States');
      $em->persist($address);

      $em->persist($companyLocation);

      $em->flush();

      return $companyLocation;
    }

    /**
     * @param $input
     *
     * @return null|object
     */
    public function updateCompanyLocation($input) {
      $em = $this->getEntityManager();

      $companyLocation = $em->getRepository('OnSiteLubeAdminBundle:CompanyLocation')->find($input->locationId);
      $companyLocation->setName($input->name);

      $address = $companyLocation->getAddress();
      $address->setAddress($input->address);
      $address->setCity($input->city);
      $address->setState($input->state);
      $address->setPostalCode($input->postalCode);
      $address->setCountry('United States');
      $em->persist($address);

      $em->persist($companyLocation);

      $em->flush();

      return $companyLocation;
    }


    /**
     * @param $service
     *
     * @return object
     */
    public static function findRepository($service) {
      return $service->getDoctrine()->getRepository('OnSiteLubeAdminBundle:CompanyLocation');
    }


  }
