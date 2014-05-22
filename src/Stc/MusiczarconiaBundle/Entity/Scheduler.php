<?php

namespace Stc\MusiczarconiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Scheduler
 */
class Scheduler
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $date;

    /**
     * @var \DateTime
     */
    private $reservationTime;

    /**
     * @var integer
     */
    private $duration;

    /**
     * @var string
     */
    private $notes;

    /**
     * @var string
     */
    private $confirmationCode;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var integer
     */
    private $user_id;

    /**
     * @var integer
     */
    private $studio_id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $studios;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $users;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->studios = new \Doctrine\Common\Collections\ArrayCollection();
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set date
     *
     * @param string $date
     * @return Scheduler
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set reservationTime
     *
     * @param \DateTime $reservationTime
     * @return Scheduler
     */
    public function setReservationTime($reservationTime)
    {
        $this->reservationTime = $reservationTime;

        return $this;
    }

    /**
     * Get reservationTime
     *
     * @return \DateTime 
     */
    public function getReservationTime()
    {
        return $this->reservationTime;
    }

    /**
     * Set duration
     *
     * @param integer $duration
     * @return Scheduler
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return integer 
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set notes
     *
     * @param string $notes
     * @return Scheduler
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return string 
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set confirmationCode
     *
     * @param string $confirmationCode
     * @return Scheduler
     */
    public function setConfirmationCode($confirmationCode)
    {
        $this->confirmationCode = $confirmationCode;

        return $this;
    }

    /**
     * Get confirmationCode
     *
     * @return string 
     */
    public function getConfirmationCode()
    {
        return $this->confirmationCode;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Scheduler
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Scheduler
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Scheduler
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set user_id
     *
     * @param integer $userId
     * @return Scheduler
     */
    public function setUserId($userId)
    {
        $this->user_id = $userId;

        return $this;
    }

    /**
     * Get user_id
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Set studio_id
     *
     * @param integer $studioId
     * @return Scheduler
     */
    public function setStudioId($studioId)
    {
        $this->studio_id = $studioId;

        return $this;
    }

    /**
     * Get studio_id
     *
     * @return integer 
     */
    public function getStudioId()
    {
        return $this->studio_id;
    }

    /**
     * Add studios
     *
     * @param \Stc\MusiczarconiaBundle\Entity\Studio $studios
     * @return Scheduler
     */
    public function addStudio(\Stc\MusiczarconiaBundle\Entity\Studio $studios)
    {
        $this->studios[] = $studios;

        return $this;
    }

    /**
     * Remove studios
     *
     * @param \Stc\MusiczarconiaBundle\Entity\Studio $studios
     */
    public function removeStudio(\Stc\MusiczarconiaBundle\Entity\Studio $studios)
    {
        $this->studios->removeElement($studios);
    }

    /**
     * Get studios
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getStudios()
    {
        return $this->studios;
    }

    /**
     * Add users
     *
     * @param \Stc\BaseBundle\Entity\FosUser $users
     * @return Scheduler
     */
    public function addUser(\Stc\BaseBundle\Entity\FosUser $users)
    {
        $this->users[] = $users;

        return $this;
    }

    /**
     * Remove users
     *
     * @param \Stc\BaseBundle\Entity\FosUser $users
     */
    public function removeUser(\Stc\BaseBundle\Entity\FosUser $users)
    {
        $this->users->removeElement($users);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsers()
    {
        return $this->users;
    }
    /**
     * @ORM\PrePersist
     */
    public function setCreatedAtValue()
    {
        // Add your code here
    }

    /**
     * @ORM\PreUpdate
     */
    public function setUpdatedAtValue()
    {
        // Add your code here
    }
}
