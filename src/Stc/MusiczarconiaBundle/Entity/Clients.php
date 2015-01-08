<?php

namespace Stc\MusiczarconiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Clients
 */
class Clients
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $dateEntered;

    /**
     * @var string
     */
    private $description;

    /**
     * @var boolean
     */
    private $deleted;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $phoneMobile;

    /**
     * @var string
     */
    private $email;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $schedulers;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schedulers = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set dateEntered
     *
     * @param \DateTime $dateEntered
     * @return Clients
     */
    public function setDateEntered($dateEntered)
    {
        $this->dateEntered = $dateEntered;

        return $this;
    }

    /**
     * Get dateEntered
     *
     * @return \DateTime 
     */
    public function getDateEntered()
    {
        return $this->dateEntered;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Clients
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return Clients
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return boolean 
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return Clients
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
     * @return Clients
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
     * Set phoneMobile
     *
     * @param string $phoneMobile
     * @return Clients
     */
    public function setPhoneMobile($phoneMobile)
    {
        $this->phoneMobile = $phoneMobile;

        return $this;
    }

    /**
     * Get phoneMobile
     *
     * @return string 
     */
    public function getPhoneMobile()
    {
        return $this->phoneMobile;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Clients
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
     * Add schedulers
     *
     * @param \Stc\MusiczarconiaBundle\Entity\Scheduler $schedulers
     * @return Clients
     */
    public function addScheduler(\Stc\MusiczarconiaBundle\Entity\Scheduler $schedulers)
    {
        $this->schedulers[] = $schedulers;

        return $this;
    }

    /**
     * Remove schedulers
     *
     * @param \Stc\MusiczarconiaBundle\Entity\Scheduler $schedulers
     */
    public function removeScheduler(\Stc\MusiczarconiaBundle\Entity\Scheduler $schedulers)
    {
        $this->schedulers->removeElement($schedulers);
    }

    /**
     * Get schedulers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSchedulers()
    {
        return $this->schedulers;
    }
    /**
     * @ORM\PrePersist
     */
    public function setCreatedAtValue()
    {
        $this->setDateEntered(new \DateTime('now'));
    }

    /**
     * @ORM\PrePersist
     */
    public function setCreatedByValue()
    {
        // Add your code here
    }

    /**
     * @ORM\PreUpdate
     */
    public function setUpdatedAtValue()
    {
        $this->setDateEntered(new \DateTime('now'));
    }

    /**
     * @ORM\PreUpdate
     */
    public function setModifiedUserId()
    {
        // Add your code here
    }
}
