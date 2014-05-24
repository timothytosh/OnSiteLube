<?php

namespace OnSiteLube\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Customer
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OnSiteLube\AdminBundle\Entity\CustomerRepository")
 */
class Customer
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
   * @ORM\OneToOne(targetEntity="UserAccount")
   * @ORM\JoinColumn(name="UserAccountId", referencedColumnName="id")
   */
  private $userAccount;

  /**
   * @ORM\OneToOne(targetEntity="Address")
   * @ORM\JoinColumn(name="AddressId", referencedColumnName="id")
   */
  private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="Contact", type="string", length=255)
     */
    private $contact;

    /**
     * @var string
     *
     * @ORM\Column(name="Phone", type="string", length=255)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="Fax", type="string", length=10)
     */
    private $fax;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Taxable", type="boolean")
     */
    private $taxable;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Active", type="boolean")
     */
    private $active;

  /**
   * @ORM\OneToMany(targetEntity="WorkOrder", mappedBy="Customer")
   */
    private $workOrders;


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
     * Set userAccountId
     *
     * @param integer $userAccountId
     * @return Customer
     */
    public function setUserAccountId($userAccountId)
    {
        $this->userAccountId = $userAccountId;

        return $this;
    }

    /**
     * Get userAccountId
     *
     * @return integer 
     */
    public function getUserAccountId()
    {
        return $this->userAccountId;
    }

    /**
     * Set addressId
     *
     * @param integer $addressId
     * @return Customer
     */
    public function setAddressId($addressId)
    {
        $this->addressId = $addressId;

        return $this;
    }

    /**
     * Get addressId
     *
     * @return integer 
     */
    public function getAddressId()
    {
        return $this->addressId;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Customer
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
     * Set contact
     *
     * @param string $contact
     * @return Customer
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return string 
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Customer
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
     * @return Customer
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
     * Set taxable
     *
     * @param boolean $taxable
     * @return Customer
     */
    public function setTaxable($taxable)
    {
        $this->taxable = $taxable;

        return $this;
    }

    /**
     * Get taxable
     *
     * @return boolean 
     */
    public function getTaxable()
    {
        return $this->taxable;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return Customer
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }
}
