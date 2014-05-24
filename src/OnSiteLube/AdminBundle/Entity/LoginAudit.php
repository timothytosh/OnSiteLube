<?php

namespace OnSiteLube\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LoginAudit
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OnSiteLube\AdminBundle\Entity\LoginAuditRepository")
 */
class LoginAudit
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
     * @var integer
     *
     * @ORM\Column(name="UserAccountId", type="integer")
     */
    private $userAccountId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="LoginDateTime", type="datetime")
     */
    private $loginDateTime;


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
     * @return LoginAudit
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
     * Set loginDateTime
     *
     * @param \DateTime $loginDateTime
     * @return LoginAudit
     */
    public function setLoginDateTime($loginDateTime)
    {
        $this->loginDateTime = $loginDateTime;

        return $this;
    }

    /**
     * Get loginDateTime
     *
     * @return \DateTime 
     */
    public function getLoginDateTime()
    {
        return $this->loginDateTime;
    }
}
