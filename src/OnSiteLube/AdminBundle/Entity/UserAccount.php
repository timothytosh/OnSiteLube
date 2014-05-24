<?php

namespace OnSiteLube\AdminBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * UserAccount
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OnSiteLube\AdminBundle\Entity\UserAccountRepository")
 */
class UserAccount
{
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
     * @ORM\Column(name="FirstName", type="string", length=70)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="LastName", type="string", length=70)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=100)
     */
    private $email;

  /**
   * @var string
   *
   * @ORM\Column(name="Title", type="string", length=100)
   */
    private $title;

  /**
   * @var string
   *
   * @ORM\Column(name="Phone", type="string", length=12)
   */
    private $phone;

  /**
   * @var string
   *
   * @ORM\Column(name="Fax", type="string", length=12)
   */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="Username", type="string", length=100)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="Password", type="string", length=20)
     */
    private $password;

    /**
     * @var boolean
     *
     * @ORM\Column(name="IsActive", type="boolean")
     */
    private $isActive;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CreateDate", type="datetime")
     */
    private $createDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ModifiedDate", type="datetime")
     */
    private $modifiedDate;

  /**
   * @ORM\ManyToOne(targetEntity="Gender", inversedBy="useraccount")
   * @ORM\JoinColumn(name="GenderId", referencedColumnName="id")
   */
    protected $gender;

  
  /**
   * @ORM\OneToMany(targetEntity="Acl", mappedBy="userAccount")
   */
  protected $acls;


  /**
   *
   */
  public function __construct()
  {
    $this->acls = new ArrayCollection();
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
     * Set firstName
     *
     * @param string $firstName
     * @return UserAccount
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return UserAccount
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return UserAccount
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return UserAccount
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return UserAccount
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     * @return UserAccount
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean 
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set createDate
     *
     * @param \DateTime $createDate
     * @return UserAccount
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;

        return $this;
    }

    /**
     * Get createDate
     *
     * @return \DateTime 
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * Set modifiedDate
     *
     * @param \DateTime $modifiedDate
     * @return UserAccount
     */
    public function setModifiedDate($modifiedDate)
    {
        $this->modifiedDate = $modifiedDate;

        return $this;
    }

    /**
     * Get modifiedDate
     *
     * @return \DateTime 
     */
    public function getModifiedDate()
    {
        return $this->modifiedDate;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return UserAccount
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return UserAccount
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return UserAccount
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set gender
     *
     * @param \OnSiteLube\AdminBundle\Entity\Gender $gender
     * @return UserAccount
     */
    public function setGender(\OnSiteLube\AdminBundle\Entity\Gender $gender = null)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return \OnSiteLube\AdminBundle\Entity\Gender
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Add acls
     *
     * @param \OnSiteLube\AdminBundle\Entity\Acl $acls
     * @return UserAccount
     */
    public function addAcl(\OnSiteLube\AdminBundle\Entity\Acl $acls)
    {
        $this->acls[] = $acls;

        return $this;
    }

    /**
     * Remove acls
     *
     * @param \OnSiteLube\AdminBundle\Entity\Acl $acls
     */
    public function removeAcl(\OnSiteLube\AdminBundle\Entity\Acl $acls)
    {
        $this->acls->removeElement($acls);
    }

    /**
     * Get acls
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAcls()
    {
        return $this->acls;
    }

    /**
     * Set employee
     *
     * @param \OnSiteLube\AdminBundle\Entity\Employee $employee
     * @return UserAccount
     */
    public function setEmployee(\OnSiteLube\AdminBundle\Entity\Employee $employee = null)
    {
        $this->employee = $employee;

        return $this;
    }

    /**
     * Get employee
     *
     * @return \OnSiteLube\AdminBundle\Entity\Employee 
     */
    public function getEmployee()
    {
        return $this->employee;
    }
}
