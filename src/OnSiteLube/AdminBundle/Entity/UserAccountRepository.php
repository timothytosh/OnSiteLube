<?php
  /**
   * User: timothytosh
   * Date: 2/25/14
   * Time: 2:12 PM
   */

  namespace OnSiteLube\AdminBundle\Entity;

  use Doctrine\ORM\EntityRepository;


  /**
   * Class UserAccountRepository
   * @package OnSiteLube\AdminBundle\Entity
   */
  class UserAccountRepository extends EntityRepository  {

    /**
     * @return array
     */
    public function findAll() {
      $dql = "SELECT uac.id, uac.firstName, uac.lastName, uac.isActive, uac.email FROM OnSiteLubeAdminBundle:UserAccount uac";
      $query = $this->getEntityManager()->createQuery($dql);
      return $query->getResult();
    }

    /**
     * @param $username
     * @param $password
     *
     * @return array
     */
    public function findUserAccount($username, $password) {
      $dql  = "SELECT uac.id, uac.firstName, uac.lastName, uac.isActive, uac.email, uac.username, ";
      $dql .= "uac.title, uac.phone, uac.fax, uac.password, g.id as genderId, g.name as gender ";
      $dql .= "FROM OnSiteLubeAdminBundle:UserAccount uac join uac.gender g ";
      $dql .= "where uac.username = :username and uac.password = :password and uac.isActive = true";
      $query = $this->getEntityManager()->createQuery($dql)
          ->setParameters(array('username' => $username, 'password' => $password));

      return $query->getResult();
    }


    /**
     * @param $userToUpdate
     *
     * @return null|object
     */
    public function updateUserAccount($userToUpdate) {
      $em = $this->getEntityManager();

      $userAccount = $em->getRepository('OnSiteLubeAdminBundle:UserAccount')->find($userToUpdate->id);

      $userAccount->setFirstName($userToUpdate->firstName);
      $userAccount->setLastName($userToUpdate->lastName);
      $userAccount->setEmail($userToUpdate->email);
      $userAccount->setPhone($userToUpdate->phone);
      $userAccount->setFax($userToUpdate->fax);
      $userAccount->setPassword($userToUpdate->password);
      $userAccount->setUserName($userToUpdate->username);


      // need to set to current date time
      $userAccount->setModifiedDate(new \DateTime());
      $em->flush();

      return $userAccount;
    }


    /**
     * @param $id
     *
     * @return array
     */
    public function findByACLsForUserAccount($id) {
      $dql = "SELECT acl.userAccountId, acl.resourceId, acl.permissionId ";
      $dql .= "FROM OnSiteLubeAdminBundle:ACL acl";
      $dql .= "where acl.userAccountId = :id";
      $query = $this->getEntityManager()->createQuery($dql)
          ->setParameters(array('userAccountId' => $id));

      return $query->getResult();
    }

    /**
     * @param $service
     *
     * @return object
     */
    public static function findRepository($service) {
      return $service->getDoctrine()->getRepository('OnSiteLubeAdminBundle:UserAccount');
    }
  }