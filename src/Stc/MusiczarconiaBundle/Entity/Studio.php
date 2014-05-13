<?php

namespace Stc\MusiczarconiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Studio
 */
class Studio
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $type;


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
     * @return Studio
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
     * Set code
     *
     * @param string $code
     * @return Studio
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Studio
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }
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
     * Add schedulers
     *
     * @param \Stc\MusiczarconiaBundle\Entity\Scheduler $schedulers
     * @return Studio
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
     * @var string
     */
    private $studio_name;


    /**
     * Set studio_name
     *
     * @param string $studioName
     * @return Studio
     */
    public function setStudioName($studioName)
    {
        $this->studio_name = $studioName;

        return $this;
    }

    /**
     * Get studio_name
     *
     * @return string 
     */
    public function getStudioName()
    {
        return $this->studio_name;
    }
}
