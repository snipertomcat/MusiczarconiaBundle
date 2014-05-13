<?php

namespace Stc\MusiczarconiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Performances
 */
class Performances
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \DateTime
     */
    private $dateEntered;

    /**
     * @var \DateTime
     */
    private $dateModified;

    /**
     * @var string
     */
    private $modifiedUserId;

    /**
     * @var string
     */
    private $createdBy;

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
    private $assignedUserId;

    /**
     * @var string
     */
    private $showPerformanceType;

    /**
     * @var string
     */
    private $leadSource;

    /**
     * @var float
     */
    private $amount;

    /**
     * @var float
     */
    private $amountUsdollar;

    /**
     * @var string
     */
    private $currencyId;

    /**
     * @var \DateTime
     */
    private $dateClosed;

    /**
     * @var string
     */
    private $nextStep;

    /**
     * @var string
     */
    private $salesStage;

    /**
     * @var float
     */
    private $probability;

    /**
     * @var \DateTime
     */
    private $performanceDate;

    /**
     * @var string
     */
    private $performanceLength;

    /**
     * @var string
     */
    private $bandId;

    /**
     * @var \DateTime
     */
    private $loadInTime;

    /**
     * @var \DateTime
     */
    private $performanceEndTime;

    /**
     * @var string
     */
    private $contactIdC;

    /**
     * @var string
     */
    private $contactId1C;

    /**
     * @var boolean
     */
    private $mealsIncluded;

    /**
     * @var string
     */
    private $performanceFee;

    /**
     * @var string
     */
    private $budget;

    /**
     * @var string
     */
    private $postshowcomments;

    /**
     * @var string
     */
    private $travelComments;

    /**
     * @var string
     */
    private $flightBudget;

    /**
     * @var string
     */
    private $rentalCarBudget;

    /**
     * @var string
     */
    private $hotelBudget;

    /**
     * @var string
     */
    private $actualAttendance;

    /**
     * @var string
     */
    private $estimatedAttendance;

    /**
     * @var string
     */
    private $soundCheckTime;

    /**
     * @var string
     */
    private $venueId;


    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Performances
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
     * Set dateEntered
     *
     * @param \DateTime $dateEntered
     * @return Performances
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
     * Set dateModified
     *
     * @param \DateTime $dateModified
     * @return Performances
     */
    public function setDateModified($dateModified)
    {
        $this->dateModified = $dateModified;

        return $this;
    }

    /**
     * Get dateModified
     *
     * @return \DateTime 
     */
    public function getDateModified()
    {
        return $this->dateModified;
    }

    /**
     * Set modifiedUserId
     *
     * @param string $modifiedUserId
     * @return Performances
     */
    public function setModifiedUserId($modifiedUserId)
    {
        $this->modifiedUserId = $modifiedUserId;

        return $this;
    }

    /**
     * Get modifiedUserId
     *
     * @return string 
     */
    public function getModifiedUserId()
    {
        return $this->modifiedUserId;
    }

    /**
     * Set createdBy
     *
     * @param string $createdBy
     * @return Performances
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return string 
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Performances
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
     * @return Performances
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
     * Set assignedUserId
     *
     * @param string $assignedUserId
     * @return Performances
     */
    public function setAssignedUserId($assignedUserId)
    {
        $this->assignedUserId = $assignedUserId;

        return $this;
    }

    /**
     * Get assignedUserId
     *
     * @return string 
     */
    public function getAssignedUserId()
    {
        return $this->assignedUserId;
    }

    /**
     * Set showPerformanceType
     *
     * @param string $showPerformanceType
     * @return Performances
     */
    public function setShowPerformanceType($showPerformanceType)
    {
        $this->showPerformanceType = $showPerformanceType;

        return $this;
    }

    /**
     * Get showPerformanceType
     *
     * @return string 
     */
    public function getShowPerformanceType()
    {
        return $this->showPerformanceType;
    }

    /**
     * Set leadSource
     *
     * @param string $leadSource
     * @return Performances
     */
    public function setLeadSource($leadSource)
    {
        $this->leadSource = $leadSource;

        return $this;
    }

    /**
     * Get leadSource
     *
     * @return string 
     */
    public function getLeadSource()
    {
        return $this->leadSource;
    }

    /**
     * Set amount
     *
     * @param float $amount
     * @return Performances
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return float 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set amountUsdollar
     *
     * @param float $amountUsdollar
     * @return Performances
     */
    public function setAmountUsdollar($amountUsdollar)
    {
        $this->amountUsdollar = $amountUsdollar;

        return $this;
    }

    /**
     * Get amountUsdollar
     *
     * @return float 
     */
    public function getAmountUsdollar()
    {
        return $this->amountUsdollar;
    }

    /**
     * Set currencyId
     *
     * @param string $currencyId
     * @return Performances
     */
    public function setCurrencyId($currencyId)
    {
        $this->currencyId = $currencyId;

        return $this;
    }

    /**
     * Get currencyId
     *
     * @return string 
     */
    public function getCurrencyId()
    {
        return $this->currencyId;
    }

    /**
     * Set dateClosed
     *
     * @param \DateTime $dateClosed
     * @return Performances
     */
    public function setDateClosed($dateClosed)
    {
        $this->dateClosed = $dateClosed;

        return $this;
    }

    /**
     * Get dateClosed
     *
     * @return \DateTime 
     */
    public function getDateClosed()
    {
        return $this->dateClosed;
    }

    /**
     * Set nextStep
     *
     * @param string $nextStep
     * @return Performances
     */
    public function setNextStep($nextStep)
    {
        $this->nextStep = $nextStep;

        return $this;
    }

    /**
     * Get nextStep
     *
     * @return string 
     */
    public function getNextStep()
    {
        return $this->nextStep;
    }

    /**
     * Set salesStage
     *
     * @param string $salesStage
     * @return Performances
     */
    public function setSalesStage($salesStage)
    {
        $this->salesStage = $salesStage;

        return $this;
    }

    /**
     * Get salesStage
     *
     * @return string 
     */
    public function getSalesStage()
    {
        return $this->salesStage;
    }

    /**
     * Set probability
     *
     * @param float $probability
     * @return Performances
     */
    public function setProbability($probability)
    {
        $this->probability = $probability;

        return $this;
    }

    /**
     * Get probability
     *
     * @return float 
     */
    public function getProbability()
    {
        return $this->probability;
    }

    /**
     * Set performanceDate
     *
     * @param \DateTime $performanceDate
     * @return Performances
     */
    public function setPerformanceDate($performanceDate)
    {
        $this->performanceDate = $performanceDate;

        return $this;
    }

    /**
     * Get performanceDate
     *
     * @return \DateTime 
     */
    public function getPerformanceDate()
    {
        return $this->performanceDate;
    }

    /**
     * Set performanceLength
     *
     * @param string $performanceLength
     * @return Performances
     */
    public function setPerformanceLength($performanceLength)
    {
        $this->performanceLength = $performanceLength;

        return $this;
    }

    /**
     * Get performanceLength
     *
     * @return string 
     */
    public function getPerformanceLength()
    {
        return $this->performanceLength;
    }

    /**
     * Set bandId
     *
     * @param string $bandId
     * @return Performances
     */
    public function setBandId($bandId)
    {
        $this->bandId = $bandId;

        return $this;
    }

    /**
     * Get bandId
     *
     * @return string 
     */
    public function getBandId()
    {
        return $this->bandId;
    }

    /**
     * Set loadInTime
     *
     * @param \DateTime $loadInTime
     * @return Performances
     */
    public function setLoadInTime($loadInTime)
    {
        $this->loadInTime = $loadInTime;

        return $this;
    }

    /**
     * Get loadInTime
     *
     * @return \DateTime 
     */
    public function getLoadInTime()
    {
        return $this->loadInTime;
    }

    /**
     * Set performanceEndTime
     *
     * @param \DateTime $performanceEndTime
     * @return Performances
     */
    public function setPerformanceEndTime($performanceEndTime)
    {
        $this->performanceEndTime = $performanceEndTime;

        return $this;
    }

    /**
     * Get performanceEndTime
     *
     * @return \DateTime 
     */
    public function getPerformanceEndTime()
    {
        return $this->performanceEndTime;
    }

    /**
     * Set contactIdC
     *
     * @param string $contactIdC
     * @return Performances
     */
    public function setContactIdC($contactIdC)
    {
        $this->contactIdC = $contactIdC;

        return $this;
    }

    /**
     * Get contactIdC
     *
     * @return string 
     */
    public function getContactIdC()
    {
        return $this->contactIdC;
    }

    /**
     * Set contactId1C
     *
     * @param string $contactId1C
     * @return Performances
     */
    public function setContactId1C($contactId1C)
    {
        $this->contactId1C = $contactId1C;

        return $this;
    }

    /**
     * Get contactId1C
     *
     * @return string 
     */
    public function getContactId1C()
    {
        return $this->contactId1C;
    }

    /**
     * Set mealsIncluded
     *
     * @param boolean $mealsIncluded
     * @return Performances
     */
    public function setMealsIncluded($mealsIncluded)
    {
        $this->mealsIncluded = $mealsIncluded;

        return $this;
    }

    /**
     * Get mealsIncluded
     *
     * @return boolean 
     */
    public function getMealsIncluded()
    {
        return $this->mealsIncluded;
    }

    /**
     * Set performanceFee
     *
     * @param string $performanceFee
     * @return Performances
     */
    public function setPerformanceFee($performanceFee)
    {
        $this->performanceFee = $performanceFee;

        return $this;
    }

    /**
     * Get performanceFee
     *
     * @return string 
     */
    public function getPerformanceFee()
    {
        return $this->performanceFee;
    }

    /**
     * Set budget
     *
     * @param string $budget
     * @return Performances
     */
    public function setBudget($budget)
    {
        $this->budget = $budget;

        return $this;
    }

    /**
     * Get budget
     *
     * @return string 
     */
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * Set postshowcomments
     *
     * @param string $postshowcomments
     * @return Performances
     */
    public function setPostshowcomments($postshowcomments)
    {
        $this->postshowcomments = $postshowcomments;

        return $this;
    }

    /**
     * Get postshowcomments
     *
     * @return string 
     */
    public function getPostshowcomments()
    {
        return $this->postshowcomments;
    }

    /**
     * Set travelComments
     *
     * @param string $travelComments
     * @return Performances
     */
    public function setTravelComments($travelComments)
    {
        $this->travelComments = $travelComments;

        return $this;
    }

    /**
     * Get travelComments
     *
     * @return string 
     */
    public function getTravelComments()
    {
        return $this->travelComments;
    }

    /**
     * Set flightBudget
     *
     * @param string $flightBudget
     * @return Performances
     */
    public function setFlightBudget($flightBudget)
    {
        $this->flightBudget = $flightBudget;

        return $this;
    }

    /**
     * Get flightBudget
     *
     * @return string 
     */
    public function getFlightBudget()
    {
        return $this->flightBudget;
    }

    /**
     * Set rentalCarBudget
     *
     * @param string $rentalCarBudget
     * @return Performances
     */
    public function setRentalCarBudget($rentalCarBudget)
    {
        $this->rentalCarBudget = $rentalCarBudget;

        return $this;
    }

    /**
     * Get rentalCarBudget
     *
     * @return string 
     */
    public function getRentalCarBudget()
    {
        return $this->rentalCarBudget;
    }

    /**
     * Set hotelBudget
     *
     * @param string $hotelBudget
     * @return Performances
     */
    public function setHotelBudget($hotelBudget)
    {
        $this->hotelBudget = $hotelBudget;

        return $this;
    }

    /**
     * Get hotelBudget
     *
     * @return string 
     */
    public function getHotelBudget()
    {
        return $this->hotelBudget;
    }

    /**
     * Set actualAttendance
     *
     * @param string $actualAttendance
     * @return Performances
     */
    public function setActualAttendance($actualAttendance)
    {
        $this->actualAttendance = $actualAttendance;

        return $this;
    }

    /**
     * Get actualAttendance
     *
     * @return string 
     */
    public function getActualAttendance()
    {
        return $this->actualAttendance;
    }

    /**
     * Set estimatedAttendance
     *
     * @param string $estimatedAttendance
     * @return Performances
     */
    public function setEstimatedAttendance($estimatedAttendance)
    {
        $this->estimatedAttendance = $estimatedAttendance;

        return $this;
    }

    /**
     * Get estimatedAttendance
     *
     * @return string 
     */
    public function getEstimatedAttendance()
    {
        return $this->estimatedAttendance;
    }

    /**
     * Set soundCheckTime
     *
     * @param string $soundCheckTime
     * @return Performances
     */
    public function setSoundCheckTime($soundCheckTime)
    {
        $this->soundCheckTime = $soundCheckTime;

        return $this;
    }

    /**
     * Get soundCheckTime
     *
     * @return string 
     */
    public function getSoundCheckTime()
    {
        return $this->soundCheckTime;
    }

    /**
     * Set venueId
     *
     * @param string $venueId
     * @return Performances
     */
    public function setVenueId($venueId)
    {
        $this->venueId = $venueId;

        return $this;
    }

    /**
     * Get venueId
     *
     * @return string 
     */
    public function getVenueId()
    {
        return $this->venueId;
    }
    /**
     * @var string
     */
    private $performance_name;


    /**
     * Set performance_name
     *
     * @param string $performanceName
     * @return Performances
     */
    public function setPerformanceName($performanceName)
    {
        $this->performance_name = $performanceName;

        return $this;
    }

    /**
     * Get performance_name
     *
     * @return string 
     */
    public function getPerformanceName()
    {
        return $this->performance_name;
    }
}
