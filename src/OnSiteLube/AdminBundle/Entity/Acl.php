<?php

  namespace OnSiteLube\AdminBundle\Entity;

  use Doctrine\ORM\Mapping as ORM;

  /**
   * Acl
   * @ORM\Table()
   * @ORM\Entity(repositoryClass="OnSiteLube\AdminBundle\Entity\AclRepository")
   */
  class Acl {
    const READ = 1;
    const EDIT = 2;
    const WRITE = 3;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="resourceId", type="integer")
     */
    private $resourceId;

    /**
     * @var int
     *
     * @ORM\Column(name="permissionId", type="integer")
     */
    private $permissionId;


    /**
     * @ORM\ManyToOne(targetEntity="UserAccount", inversedBy="acl")
     * @ORM\JoinColumn(name="UserAccountId", referencedColumnName="id")
     */
    protected $userAccount;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
      return $this->id;
    }

    /**
     * Set resourceId
     *
     * @param integer $resourceId
     *
     * @return Acl
     */
    public function setResourceId($resourceId) {
      $this->resourceId = $resourceId;

      return $this;
    }

    /**
     * Get resourceId
     *
     * @return integer
     */
    public function getResourceId() {
      return $this->resourceId;
    }

    /**
     * Set permissionId
     *
     * @param integer $permissionId
     *
     * @return Acl
     */
    public function setPermissionId($permissionId) {
      $this->permissionId = $permissionId;

      return $this;
    }

    /**
     * Get permissionId
     *
     * @return integer
     */
    public function getPermissionId() {
      return $this->permissionId;
    }

    /**
     * Set userAccount
     *
     * @param \OnSiteLube\AdminBundle\Entity\UserAccount $userAccount
     *
     * @return Acl
     */
    public function setUserAccount(\OnSiteLube\AdminBundle\Entity\UserAccount $userAccount = null) {
      $this->userAccount = $userAccount;

      return $this;
    }

    /**
     * Get userAccount
     *
     * @return \OnSiteLube\AdminBundle\Entity\UserAccount
     */
    public function getUserAccount() {
      return $this->userAccount;
    }
  }
