<?php

namespace OnSiteLube\AdminBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Gender
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OnSiteLube\AdminBundle\Entity\GenderRepository")
 */
class Gender
{
    const MALE = 1;
    const FEMALE = 2;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=8)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="UserAccount", mappedBy="gender")
     */
    protected $userAccounts;


  /**
   *
   */
  public function __construct()
    {
      $this->userAccounts = new ArrayCollection();
    }


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
     * Set name
     *
     * @param string $name
     * @return Gender
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add userAccounts
     *
     * @param \OnSiteLube\AdminBundle\Entity\UserAccount $userAccounts
     * @return Gender
     */
    public function addUserAccount(\OnSiteLube\AdminBundle\Entity\UserAccount $userAccounts)
    {
        $this->userAccounts[] = $userAccounts;

        return $this;
    }

    /**
     * Remove userAccounts
     *
     * @param \OnSiteLube\AdminBundle\Entity\UserAccount $userAccounts
     */
    public function removeUserAccount(\OnSiteLube\AdminBundle\Entity\UserAccount $userAccounts)
    {
        $this->userAccounts->removeElement($userAccounts);
    }

    /**
     * Get userAccounts
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUserAccounts()
    {
        return $this->userAccounts;
    }
}
