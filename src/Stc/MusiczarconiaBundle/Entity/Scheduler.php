<?php

namespace Stc\MusiczarconiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Stc\BaseBundle\Entity\User;

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
     * @var \DateTime
     */
    private $reservation_date;

    /**
     * @var string
     */
    private $reservation_time;

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
    private $confirmation_code;

    /**
     * @var \DateTime
     */
    private $created_at;

    /**
     * @var \DateTime
     */
    private $updated_at;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var User
     */
    private $user;

    /**
     * @var \Stc\MusiczarconiaBundle\Entity\Studio
     */
    private $studio;


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
     * Set reservation_date
     *
     * @param string $reservationDate
     * @return Scheduler
     */
    public function setReservationDate($reservationDate)
    {
        $this->reservation_date = $reservationDate;

        return $this;
    }

    /**
     * Get reservation_date
     *
     * @return string
     */
    public function getReservationDate()
    {
        return $this->reservation_date;
    }

    /**
     * Set reservation_time
     *
     * @param \DateTime $reservationTime
     * @return Scheduler
     */
    public function setReservationTime($reservationTime)
    {
        $this->reservation_time = $reservationTime;

        return $this;
    }

    /**
     * Get reservation_time
     *
     * @return \DateTime 
     */
    public function getReservationTime()
    {
        return $this->reservation_time;
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
     * Set confirmation_code
     *
     * @param string $confirmationCode
     * @return Scheduler
     */
    public function setConfirmationCode($confirmationCode)
    {
        $this->confirmation_code = $confirmationCode;

        return $this;
    }

    /**
     * Get confirmation_code
     *
     * @return string 
     */
    public function getConfirmationCode()
    {
        return $this->confirmation_code;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Scheduler
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get created_at
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set updated_at
     *
     * @param \DateTime $updatedAt
     * @return Scheduler
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;

        return $this;
    }

    /**
     * Get updated_at
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
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
     * Set user
     *
     * @param User $user
     * @return Scheduler
     */
    public function setUser(User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set studio
     *
     * @param \Stc\MusiczarconiaBundle\Entity\Studio $studio
     * @return Scheduler
     */
    public function setStudio(\Stc\MusiczarconiaBundle\Entity\Studio $studio = null)
    {
        $this->studio = $studio;

        return $this;
    }

    /**
     * Get studio
     *
     * @return \Stc\MusiczarconiaBundle\Entity\Studio 
     */
    public function getStudio()
    {
        return $this->studio;
    }
    /**
     * @ORM\PrePersist
     */
    public function setStatusActive()
    {
        // Add your code here
    }

    /**
     * @ORM\PrePersist
     */
    public function createConfirmationCode()
    {
        // Add your code here
    }

    /**
     * @ORM\PrePersist
     */
    public function checkConflictingReservation()
    {
        // Add your code here
    }

    /**
     * @ORM\PostPersist
     */
    public function setStatusInactive()
    {
        // Add your code here
    }
    /**
     * @var string
     */
    private $date;

    /**
     * @var \DateTime
     */
    private $reservationTime;

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
     * @param \Stc\MusiczarconiaBundle\Entity\FosUser $users
     * @return Scheduler
     */
    public function addUser(\Stc\MusiczarconiaBundle\Entity\FosUser $users)
    {
        $this->users[] = $users;

        return $this;
    }

    /**
     * Remove users
     *
     * @param \Stc\MusiczarconiaBundle\Entity\FosUser $users
     */
    public function removeUser(\Stc\MusiczarconiaBundle\Entity\FosUser $users)
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
