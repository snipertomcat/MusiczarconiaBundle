<?php

namespace Stc\MusiczarconiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Venues
 */
class Venues
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
    private $venuVenueManagementType;

    /**
     * @var string
     */
    private $industry;

    /**
     * @var string
     */
    private $annualRevenue;

    /**
     * @var string
     */
    private $phoneFax;

    /**
     * @var string
     */
    private $billingAddressStreet;

    /**
     * @var string
     */
    private $billingAddressCity;

    /**
     * @var string
     */
    private $billingAddressState;

    /**
     * @var string
     */
    private $billingAddressPostalcode;

    /**
     * @var string
     */
    private $billingAddressCountry;

    /**
     * @var string
     */
    private $rating;

    /**
     * @var string
     */
    private $phoneOffice;

    /**
     * @var string
     */
    private $phoneAlternate;

    /**
     * @var string
     */
    private $website;

    /**
     * @var string
     */
    private $ownership;

    /**
     * @var string
     */
    private $employees;

    /**
     * @var string
     */
    private $tickerSymbol;

    /**
     * @var string
     */
    private $shippingAddressStreet;

    /**
     * @var string
     */
    private $shippingAddressCity;

    /**
     * @var string
     */
    private $shippingAddressState;

    /**
     * @var string
     */
    private $shippingAddressPostalcode;

    /**
     * @var string
     */
    private $shippingAddressCountry;

    /**
     * @var string
     */
    private $venueType;

    /**
     * @var string
     */
    private $contactIdC;

    /**
     * @var string
     */
    private $capacity;

    /**
     * @var string
     */
    private $ageLimit;

    /**
     * @var string
     */
    private $avgTicketPrice;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $contacts;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->contacts = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * @return Venues
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
     * @return Venues
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
     * @return Venues
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
     * @return Venues
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
     * @return Venues
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
     * @return Venues
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
     * @return Venues
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
     * @return Venues
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
     * Set venuVenueManagementType
     *
     * @param string $venuVenueManagementType
     * @return Venues
     */
    public function setVenuVenueManagementType($venuVenueManagementType)
    {
        $this->venuVenueManagementType = $venuVenueManagementType;

        return $this;
    }

    /**
     * Get venuVenueManagementType
     *
     * @return string 
     */
    public function getVenuVenueManagementType()
    {
        return $this->venuVenueManagementType;
    }

    /**
     * Set industry
     *
     * @param string $industry
     * @return Venues
     */
    public function setIndustry($industry)
    {
        $this->industry = $industry;

        return $this;
    }

    /**
     * Get industry
     *
     * @return string 
     */
    public function getIndustry()
    {
        return $this->industry;
    }

    /**
     * Set annualRevenue
     *
     * @param string $annualRevenue
     * @return Venues
     */
    public function setAnnualRevenue($annualRevenue)
    {
        $this->annualRevenue = $annualRevenue;

        return $this;
    }

    /**
     * Get annualRevenue
     *
     * @return string 
     */
    public function getAnnualRevenue()
    {
        return $this->annualRevenue;
    }

    /**
     * Set phoneFax
     *
     * @param string $phoneFax
     * @return Venues
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
     * Set billingAddressStreet
     *
     * @param string $billingAddressStreet
     * @return Venues
     */
    public function setBillingAddressStreet($billingAddressStreet)
    {
        $this->billingAddressStreet = $billingAddressStreet;

        return $this;
    }

    /**
     * Get billingAddressStreet
     *
     * @return string 
     */
    public function getBillingAddressStreet()
    {
        return $this->billingAddressStreet;
    }

    /**
     * Set billingAddressCity
     *
     * @param string $billingAddressCity
     * @return Venues
     */
    public function setBillingAddressCity($billingAddressCity)
    {
        $this->billingAddressCity = $billingAddressCity;

        return $this;
    }

    /**
     * Get billingAddressCity
     *
     * @return string 
     */
    public function getBillingAddressCity()
    {
        return $this->billingAddressCity;
    }

    /**
     * Set billingAddressState
     *
     * @param string $billingAddressState
     * @return Venues
     */
    public function setBillingAddressState($billingAddressState)
    {
        $this->billingAddressState = $billingAddressState;

        return $this;
    }

    /**
     * Get billingAddressState
     *
     * @return string 
     */
    public function getBillingAddressState()
    {
        return $this->billingAddressState;
    }

    /**
     * Set billingAddressPostalcode
     *
     * @param string $billingAddressPostalcode
     * @return Venues
     */
    public function setBillingAddressPostalcode($billingAddressPostalcode)
    {
        $this->billingAddressPostalcode = $billingAddressPostalcode;

        return $this;
    }

    /**
     * Get billingAddressPostalcode
     *
     * @return string 
     */
    public function getBillingAddressPostalcode()
    {
        return $this->billingAddressPostalcode;
    }

    /**
     * Set billingAddressCountry
     *
     * @param string $billingAddressCountry
     * @return Venues
     */
    public function setBillingAddressCountry($billingAddressCountry)
    {
        $this->billingAddressCountry = $billingAddressCountry;

        return $this;
    }

    /**
     * Get billingAddressCountry
     *
     * @return string 
     */
    public function getBillingAddressCountry()
    {
        return $this->billingAddressCountry;
    }

    /**
     * Set rating
     *
     * @param string $rating
     * @return Venues
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return string 
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set phoneOffice
     *
     * @param string $phoneOffice
     * @return Venues
     */
    public function setPhoneOffice($phoneOffice)
    {
        $this->phoneOffice = $phoneOffice;

        return $this;
    }

    /**
     * Get phoneOffice
     *
     * @return string 
     */
    public function getPhoneOffice()
    {
        return $this->phoneOffice;
    }

    /**
     * Set phoneAlternate
     *
     * @param string $phoneAlternate
     * @return Venues
     */
    public function setPhoneAlternate($phoneAlternate)
    {
        $this->phoneAlternate = $phoneAlternate;

        return $this;
    }

    /**
     * Get phoneAlternate
     *
     * @return string 
     */
    public function getPhoneAlternate()
    {
        return $this->phoneAlternate;
    }

    /**
     * Set website
     *
     * @param string $website
     * @return Venues
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string 
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set ownership
     *
     * @param string $ownership
     * @return Venues
     */
    public function setOwnership($ownership)
    {
        $this->ownership = $ownership;

        return $this;
    }

    /**
     * Get ownership
     *
     * @return string 
     */
    public function getOwnership()
    {
        return $this->ownership;
    }

    /**
     * Set employees
     *
     * @param string $employees
     * @return Venues
     */
    public function setEmployees($employees)
    {
        $this->employees = $employees;

        return $this;
    }

    /**
     * Get employees
     *
     * @return string 
     */
    public function getEmployees()
    {
        return $this->employees;
    }

    /**
     * Set tickerSymbol
     *
     * @param string $tickerSymbol
     * @return Venues
     */
    public function setTickerSymbol($tickerSymbol)
    {
        $this->tickerSymbol = $tickerSymbol;

        return $this;
    }

    /**
     * Get tickerSymbol
     *
     * @return string 
     */
    public function getTickerSymbol()
    {
        return $this->tickerSymbol;
    }

    /**
     * Set shippingAddressStreet
     *
     * @param string $shippingAddressStreet
     * @return Venues
     */
    public function setShippingAddressStreet($shippingAddressStreet)
    {
        $this->shippingAddressStreet = $shippingAddressStreet;

        return $this;
    }

    /**
     * Get shippingAddressStreet
     *
     * @return string 
     */
    public function getShippingAddressStreet()
    {
        return $this->shippingAddressStreet;
    }

    /**
     * Set shippingAddressCity
     *
     * @param string $shippingAddressCity
     * @return Venues
     */
    public function setShippingAddressCity($shippingAddressCity)
    {
        $this->shippingAddressCity = $shippingAddressCity;

        return $this;
    }

    /**
     * Get shippingAddressCity
     *
     * @return string 
     */
    public function getShippingAddressCity()
    {
        return $this->shippingAddressCity;
    }

    /**
     * Set shippingAddressState
     *
     * @param string $shippingAddressState
     * @return Venues
     */
    public function setShippingAddressState($shippingAddressState)
    {
        $this->shippingAddressState = $shippingAddressState;

        return $this;
    }

    /**
     * Get shippingAddressState
     *
     * @return string 
     */
    public function getShippingAddressState()
    {
        return $this->shippingAddressState;
    }

    /**
     * Set shippingAddressPostalcode
     *
     * @param string $shippingAddressPostalcode
     * @return Venues
     */
    public function setShippingAddressPostalcode($shippingAddressPostalcode)
    {
        $this->shippingAddressPostalcode = $shippingAddressPostalcode;

        return $this;
    }

    /**
     * Get shippingAddressPostalcode
     *
     * @return string 
     */
    public function getShippingAddressPostalcode()
    {
        return $this->shippingAddressPostalcode;
    }

    /**
     * Set shippingAddressCountry
     *
     * @param string $shippingAddressCountry
     * @return Venues
     */
    public function setShippingAddressCountry($shippingAddressCountry)
    {
        $this->shippingAddressCountry = $shippingAddressCountry;

        return $this;
    }

    /**
     * Get shippingAddressCountry
     *
     * @return string 
     */
    public function getShippingAddressCountry()
    {
        return $this->shippingAddressCountry;
    }

    /**
     * Set venueType
     *
     * @param string $venueType
     * @return Venues
     */
    public function setVenueType($venueType)
    {
        $this->venueType = $venueType;

        return $this;
    }

    /**
     * Get venueType
     *
     * @return string 
     */
    public function getVenueType()
    {
        return $this->venueType;
    }

    /**
     * Set contactIdC
     *
     * @param string $contactIdC
     * @return Venues
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
     * Set capacity
     *
     * @param string $capacity
     * @return Venues
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }

    /**
     * Get capacity
     *
     * @return string 
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * Set ageLimit
     *
     * @param string $ageLimit
     * @return Venues
     */
    public function setAgeLimit($ageLimit)
    {
        $this->ageLimit = $ageLimit;

        return $this;
    }

    /**
     * Get ageLimit
     *
     * @return string 
     */
    public function getAgeLimit()
    {
        return $this->ageLimit;
    }

    /**
     * Set avgTicketPrice
     *
     * @param string $avgTicketPrice
     * @return Venues
     */
    public function setAvgTicketPrice($avgTicketPrice)
    {
        $this->avgTicketPrice = $avgTicketPrice;

        return $this;
    }

    /**
     * Get avgTicketPrice
     *
     * @return string 
     */
    public function getAvgTicketPrice()
    {
        return $this->avgTicketPrice;
    }

    /**
     * Add contacts
     *
     * @param \Stc\MusiczarconiaBundle\Entity\Contacts $contacts
     * @return Venues
     */
    public function addContact(\Stc\MusiczarconiaBundle\Entity\Contacts $contacts)
    {
        $this->contacts[] = $contacts;

        return $this;
    }

    /**
     * Remove contacts
     *
     * @param \Stc\MusiczarconiaBundle\Entity\Contacts $contacts
     */
    public function removeContact(\Stc\MusiczarconiaBundle\Entity\Contacts $contacts)
    {
        $this->contacts->removeElement($contacts);
    }

    /**
     * Get contacts
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getContacts()
    {
        return $this->contacts;
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
}
