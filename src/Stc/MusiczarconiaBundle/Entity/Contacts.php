<?php

namespace Stc\MusiczarconiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contacts
 */
class Contacts
{
    /**
     * @var string
     */
    private $id;

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
    private $salutation;

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
    private $title;

    /**
     * @var string
     */
    private $department;

    /**
     * @var boolean
     */
    private $doNotCall;

    /**
     * @var string
     */
    private $phoneHome;

    /**
     * @var string
     */
    private $phoneMobile;

    /**
     * @var string
     */
    private $phoneWork;

    /**
     * @var string
     */
    private $phoneOther;

    /**
     * @var string
     */
    private $phoneFax;

    /**
     * @var string
     */
    private $primaryAddressStreet;

    /**
     * @var string
     */
    private $primaryAddressCity;

    /**
     * @var string
     */
    private $primaryAddressState;

    /**
     * @var string
     */
    private $primaryAddressPostalcode;

    /**
     * @var string
     */
    private $primaryAddressCountry;

    /**
     * @var string
     */
    private $altAddressStreet;

    /**
     * @var string
     */
    private $altAddressCity;

    /**
     * @var string
     */
    private $altAddressState;

    /**
     * @var string
     */
    private $altAddressPostalcode;

    /**
     * @var string
     */
    private $altAddressCountry;

    /**
     * @var string
     */
    private $assistant;

    /**
     * @var string
     */
    private $assistantPhone;

    /**
     * @var string
     */
    private $leadSource;

    /**
     * @var string
     */
    private $reportsToId;

    /**
     * @var \DateTime
     */
    private $birthdate;

    /**
     * @var string
     */
    private $campaignId;

    /**
     * @var string
     */
    private $inetmapaddress;

    /**
     * @var string
     */
    private $inetPrimaryLatitude;

    /**
     * @var string
     */
    private $inetPrimaryLongitude;

    /**
     * @var string
     */
    private $inetSecondaryLatitude;

    /**
     * @var string
     */
    private $inetSecondaryLongitude;

    /**
     * @var boolean
     */
    private $isGeocoded;


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
     * Set dateEntered
     *
     * @param \DateTime $dateEntered
     * @return Contacts
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
     * @return Contacts
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
     * @return Contacts
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
     * @return Contacts
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
     * @return Contacts
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
     * @return Contacts
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
     * @return Contacts
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
     * Set salutation
     *
     * @param string $salutation
     * @return Contacts
     */
    public function setSalutation($salutation)
    {
        $this->salutation = $salutation;

        return $this;
    }

    /**
     * Get salutation
     *
     * @return string 
     */
    public function getSalutation()
    {
        return $this->salutation;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return Contacts
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
     * @return Contacts
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
     * Set title
     *
     * @param string $title
     * @return Contacts
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
     * Set department
     *
     * @param string $department
     * @return Contacts
     */
    public function setDepartment($department)
    {
        $this->department = $department;

        return $this;
    }

    /**
     * Get department
     *
     * @return string 
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Set doNotCall
     *
     * @param boolean $doNotCall
     * @return Contacts
     */
    public function setDoNotCall($doNotCall)
    {
        $this->doNotCall = $doNotCall;

        return $this;
    }

    /**
     * Get doNotCall
     *
     * @return boolean 
     */
    public function getDoNotCall()
    {
        return $this->doNotCall;
    }

    /**
     * Set phoneHome
     *
     * @param string $phoneHome
     * @return Contacts
     */
    public function setPhoneHome($phoneHome)
    {
        $this->phoneHome = $phoneHome;

        return $this;
    }

    /**
     * Get phoneHome
     *
     * @return string 
     */
    public function getPhoneHome()
    {
        return $this->phoneHome;
    }

    /**
     * Set phoneMobile
     *
     * @param string $phoneMobile
     * @return Contacts
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
     * Set phoneWork
     *
     * @param string $phoneWork
     * @return Contacts
     */
    public function setPhoneWork($phoneWork)
    {
        $this->phoneWork = $phoneWork;

        return $this;
    }

    /**
     * Get phoneWork
     *
     * @return string 
     */
    public function getPhoneWork()
    {
        return $this->phoneWork;
    }

    /**
     * Set phoneOther
     *
     * @param string $phoneOther
     * @return Contacts
     */
    public function setPhoneOther($phoneOther)
    {
        $this->phoneOther = $phoneOther;

        return $this;
    }

    /**
     * Get phoneOther
     *
     * @return string 
     */
    public function getPhoneOther()
    {
        return $this->phoneOther;
    }

    /**
     * Set phoneFax
     *
     * @param string $phoneFax
     * @return Contacts
     */
    public function setPhoneFax($phoneFax)
    {
        $this->phoneFax = $phoneFax;

        return $this;
    }

    /**
     * Get phoneFax
     *
     * @return string 
     */
    public function getPhoneFax()
    {
        return $this->phoneFax;
    }

    /**
     * Set primaryAddressStreet
     *
     * @param string $primaryAddressStreet
     * @return Contacts
     */
    public function setPrimaryAddressStreet($primaryAddressStreet)
    {
        $this->primaryAddressStreet = $primaryAddressStreet;

        return $this;
    }

    /**
     * Get primaryAddressStreet
     *
     * @return string 
     */
    public function getPrimaryAddressStreet()
    {
        return $this->primaryAddressStreet;
    }

    /**
     * Set primaryAddressCity
     *
     * @param string $primaryAddressCity
     * @return Contacts
     */
    public function setPrimaryAddressCity($primaryAddressCity)
    {
        $this->primaryAddressCity = $primaryAddressCity;

        return $this;
    }

    /**
     * Get primaryAddressCity
     *
     * @return string 
     */
    public function getPrimaryAddressCity()
    {
        return $this->primaryAddressCity;
    }

    /**
     * Set primaryAddressState
     *
     * @param string $primaryAddressState
     * @return Contacts
     */
    public function setPrimaryAddressState($primaryAddressState)
    {
        $this->primaryAddressState = $primaryAddressState;

        return $this;
    }

    /**
     * Get primaryAddressState
     *
     * @return string 
     */
    public function getPrimaryAddressState()
    {
        return $this->primaryAddressState;
    }

    /**
     * Set primaryAddressPostalcode
     *
     * @param string $primaryAddressPostalcode
     * @return Contacts
     */
    public function setPrimaryAddressPostalcode($primaryAddressPostalcode)
    {
        $this->primaryAddressPostalcode = $primaryAddressPostalcode;

        return $this;
    }

    /**
     * Get primaryAddressPostalcode
     *
     * @return string 
     */
    public function getPrimaryAddressPostalcode()
    {
        return $this->primaryAddressPostalcode;
    }

    /**
     * Set primaryAddressCountry
     *
     * @param string $primaryAddressCountry
     * @return Contacts
     */
    public function setPrimaryAddressCountry($primaryAddressCountry)
    {
        $this->primaryAddressCountry = $primaryAddressCountry;

        return $this;
    }

    /**
     * Get primaryAddressCountry
     *
     * @return string 
     */
    public function getPrimaryAddressCountry()
    {
        return $this->primaryAddressCountry;
    }

    /**
     * Set altAddressStreet
     *
     * @param string $altAddressStreet
     * @return Contacts
     */
    public function setAltAddressStreet($altAddressStreet)
    {
        $this->altAddressStreet = $altAddressStreet;

        return $this;
    }

    /**
     * Get altAddressStreet
     *
     * @return string 
     */
    public function getAltAddressStreet()
    {
        return $this->altAddressStreet;
    }

    /**
     * Set altAddressCity
     *
     * @param string $altAddressCity
     * @return Contacts
     */
    public function setAltAddressCity($altAddressCity)
    {
        $this->altAddressCity = $altAddressCity;

        return $this;
    }

    /**
     * Get altAddressCity
     *
     * @return string 
     */
    public function getAltAddressCity()
    {
        return $this->altAddressCity;
    }

    /**
     * Set altAddressState
     *
     * @param string $altAddressState
     * @return Contacts
     */
    public function setAltAddressState($altAddressState)
    {
        $this->altAddressState = $altAddressState;

        return $this;
    }

    /**
     * Get altAddressState
     *
     * @return string 
     */
    public function getAltAddressState()
    {
        return $this->altAddressState;
    }

    /**
     * Set altAddressPostalcode
     *
     * @param string $altAddressPostalcode
     * @return Contacts
     */
    public function setAltAddressPostalcode($altAddressPostalcode)
    {
        $this->altAddressPostalcode = $altAddressPostalcode;

        return $this;
    }

    /**
     * Get altAddressPostalcode
     *
     * @return string 
     */
    public function getAltAddressPostalcode()
    {
        return $this->altAddressPostalcode;
    }

    /**
     * Set altAddressCountry
     *
     * @param string $altAddressCountry
     * @return Contacts
     */
    public function setAltAddressCountry($altAddressCountry)
    {
        $this->altAddressCountry = $altAddressCountry;

        return $this;
    }

    /**
     * Get altAddressCountry
     *
     * @return string 
     */
    public function getAltAddressCountry()
    {
        return $this->altAddressCountry;
    }

    /**
     * Set assistant
     *
     * @param string $assistant
     * @return Contacts
     */
    public function setAssistant($assistant)
    {
        $this->assistant = $assistant;

        return $this;
    }

    /**
     * Get assistant
     *
     * @return string 
     */
    public function getAssistant()
    {
        return $this->assistant;
    }

    /**
     * Set assistantPhone
     *
     * @param string $assistantPhone
     * @return Contacts
     */
    public function setAssistantPhone($assistantPhone)
    {
        $this->assistantPhone = $assistantPhone;

        return $this;
    }

    /**
     * Get assistantPhone
     *
     * @return string 
     */
    public function getAssistantPhone()
    {
        return $this->assistantPhone;
    }

    /**
     * Set leadSource
     *
     * @param string $leadSource
     * @return Contacts
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
     * Set reportsToId
     *
     * @param string $reportsToId
     * @return Contacts
     */
    public function setReportsToId($reportsToId)
    {
        $this->reportsToId = $reportsToId;

        return $this;
    }

    /**
     * Get reportsToId
     *
     * @return string 
     */
    public function getReportsToId()
    {
        return $this->reportsToId;
    }

    /**
     * Set birthdate
     *
     * @param \DateTime $birthdate
     * @return Contacts
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get birthdate
     *
     * @return \DateTime 
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set campaignId
     *
     * @param string $campaignId
     * @return Contacts
     */
    public function setCampaignId($campaignId)
    {
        $this->campaignId = $campaignId;

        return $this;
    }

    /**
     * Get campaignId
     *
     * @return string 
     */
    public function getCampaignId()
    {
        return $this->campaignId;
    }

    /**
     * Set inetmapaddress
     *
     * @param string $inetmapaddress
     * @return Contacts
     */
    public function setInetmapaddress($inetmapaddress)
    {
        $this->inetmapaddress = $inetmapaddress;

        return $this;
    }

    /**
     * Get inetmapaddress
     *
     * @return string 
     */
    public function getInetmapaddress()
    {
        return $this->inetmapaddress;
    }

    /**
     * Set inetPrimaryLatitude
     *
     * @param string $inetPrimaryLatitude
     * @return Contacts
     */
    public function setInetPrimaryLatitude($inetPrimaryLatitude)
    {
        $this->inetPrimaryLatitude = $inetPrimaryLatitude;

        return $this;
    }

    /**
     * Get inetPrimaryLatitude
     *
     * @return string 
     */
    public function getInetPrimaryLatitude()
    {
        return $this->inetPrimaryLatitude;
    }

    /**
     * Set inetPrimaryLongitude
     *
     * @param string $inetPrimaryLongitude
     * @return Contacts
     */
    public function setInetPrimaryLongitude($inetPrimaryLongitude)
    {
        $this->inetPrimaryLongitude = $inetPrimaryLongitude;

        return $this;
    }

    /**
     * Get inetPrimaryLongitude
     *
     * @return string 
     */
    public function getInetPrimaryLongitude()
    {
        return $this->inetPrimaryLongitude;
    }

    /**
     * Set inetSecondaryLatitude
     *
     * @param string $inetSecondaryLatitude
     * @return Contacts
     */
    public function setInetSecondaryLatitude($inetSecondaryLatitude)
    {
        $this->inetSecondaryLatitude = $inetSecondaryLatitude;

        return $this;
    }

    /**
     * Get inetSecondaryLatitude
     *
     * @return string 
     */
    public function getInetSecondaryLatitude()
    {
        return $this->inetSecondaryLatitude;
    }

    /**
     * Set inetSecondaryLongitude
     *
     * @param string $inetSecondaryLongitude
     * @return Contacts
     */
    public function setInetSecondaryLongitude($inetSecondaryLongitude)
    {
        $this->inetSecondaryLongitude = $inetSecondaryLongitude;

        return $this;
    }

    /**
     * Get inetSecondaryLongitude
     *
     * @return string 
     */
    public function getInetSecondaryLongitude()
    {
        return $this->inetSecondaryLongitude;
    }

    /**
     * Set isGeocoded
     *
     * @param boolean $isGeocoded
     * @return Contacts
     */
    public function setIsGeocoded($isGeocoded)
    {
        $this->isGeocoded = $isGeocoded;

        return $this;
    }

    /**
     * Get isGeocoded
     *
     * @return boolean 
     */
    public function getIsGeocoded()
    {
        return $this->isGeocoded;
    }
    /**
     * @var \Stc\MusiczarconiaBundle\Entity\Venues
     */
    private $venue;

    /**
     * @var \Stc\MusiczarconiaBundle\Entity\Bands
     */
    private $band;


    /**
     * Set venue
     *
     * @param \Stc\MusiczarconiaBundle\Entity\Venues $venue
     * @return Contacts
     */
    public function setVenue(\Stc\MusiczarconiaBundle\Entity\Venues $venue = null)
    {
        $this->venue = $venue;

        return $this;
    }

    /**
     * Get venue
     *
     * @return \Stc\MusiczarconiaBundle\Entity\Venues 
     */
    public function getVenue()
    {
        return $this->venue;
    }

    /**
     * Set band
     *
     * @param \Stc\MusiczarconiaBundle\Entity\Bands $band
     * @return Contacts
     */
    public function setBand(\Stc\MusiczarconiaBundle\Entity\Bands $band = null)
    {
        $this->band = $band;

        return $this;
    }

    /**
     * Get band
     *
     * @return \Stc\MusiczarconiaBundle\Entity\Bands 
     */
    public function getBand()
    {
        return $this->band;
    }
    /**
     * @ORM\PrePersist
     */
    public function setCreatedAtValue()
    {
        // Add your code here
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
        // Add your code here
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->band = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add band
     *
     * @param \Stc\MusiczarconiaBundle\Entity\Bands $band
     * @return Contacts
     */
    public function addBand(\Stc\MusiczarconiaBundle\Entity\Bands $band)
    {
        $this->band[] = $band;

        return $this;
    }

    /**
     * Remove band
     *
     * @param \Stc\MusiczarconiaBundle\Entity\Bands $band
     */
    public function removeBand(\Stc\MusiczarconiaBundle\Entity\Bands $band)
    {
        $this->band->removeElement($band);
    }
}
