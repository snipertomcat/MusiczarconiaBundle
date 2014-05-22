<?php

namespace Stc\MusiczarconiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bands
 */
class Bands
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
    private $bandsBandProfileType;

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
    private $twitter;

    /**
     * @var string
     */
    private $facebook;

    /**
     * @var string
     */
    private $youtube;

    /**
     * @var string
     */
    private $vimeo;

    /**
     * @var string
     */
    private $myspace;

    /**
     * @var string
     */
    private $reverbnation;

    /**
     * @var string
     */
    private $linkdin;

    /**
     * @var string
     */
    private $googleplus;

    /**
     * @var string
     */
    private $tributeto;

    /**
     * @var string
     */
    private $genre;

    /**
     * @var string
     */
    private $contactIdC;

    /**
     * @var string
     */
    private $actType;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $fosusers;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $contacts;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fosusers = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Bands
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
     * @return Bands
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
     * @return Bands
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
     * @return Bands
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
     * @return Bands
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
     * @return Bands
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
     * @return Bands
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
     * @return Bands
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
     * Set bandsBandProfileType
     *
     * @param string $bandsBandProfileType
     * @return Bands
     */
    public function setBandsBandProfileType($bandsBandProfileType)
    {
        $this->bandsBandProfileType = $bandsBandProfileType;

        return $this;
    }

    /**
     * Get bandsBandProfileType
     *
     * @return string 
     */
    public function getBandsBandProfileType()
    {
        return $this->bandsBandProfileType;
    }

    /**
     * Set industry
     *
     * @param string $industry
     * @return Bands
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
     * @return Bands
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
     * @return Bands
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
     * @return Bands
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
     * @return Bands
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
     * @return Bands
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
     * @return Bands
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
     * @return Bands
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
     * @return Bands
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
     * @return Bands
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
     * @return Bands
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
     * @return Bands
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
     * @return Bands
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
     * @return Bands
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
     * @return Bands
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
     * @return Bands
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
     * @return Bands
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
     * @return Bands
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
     * @return Bands
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
     * @return Bands
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
     * Set twitter
     *
     * @param string $twitter
     * @return Bands
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;

        return $this;
    }

    /**
     * Get twitter
     *
     * @return string 
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * Set facebook
     *
     * @param string $facebook
     * @return Bands
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * Get facebook
     *
     * @return string 
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * Set youtube
     *
     * @param string $youtube
     * @return Bands
     */
    public function setYoutube($youtube)
    {
        $this->youtube = $youtube;

        return $this;
    }

    /**
     * Get youtube
     *
     * @return string 
     */
    public function getYoutube()
    {
        return $this->youtube;
    }

    /**
     * Set vimeo
     *
     * @param string $vimeo
     * @return Bands
     */
    public function setVimeo($vimeo)
    {
        $this->vimeo = $vimeo;

        return $this;
    }

    /**
     * Get vimeo
     *
     * @return string 
     */
    public function getVimeo()
    {
        return $this->vimeo;
    }

    /**
     * Set myspace
     *
     * @param string $myspace
     * @return Bands
     */
    public function setMyspace($myspace)
    {
        $this->myspace = $myspace;

        return $this;
    }

    /**
     * Get myspace
     *
     * @return string 
     */
    public function getMyspace()
    {
        return $this->myspace;
    }

    /**
     * Set reverbnation
     *
     * @param string $reverbnation
     * @return Bands
     */
    public function setReverbnation($reverbnation)
    {
        $this->reverbnation = $reverbnation;

        return $this;
    }

    /**
     * Get reverbnation
     *
     * @return string 
     */
    public function getReverbnation()
    {
        return $this->reverbnation;
    }

    /**
     * Set linkdin
     *
     * @param string $linkdin
     * @return Bands
     */
    public function setLinkdin($linkdin)
    {
        $this->linkdin = $linkdin;

        return $this;
    }

    /**
     * Get linkdin
     *
     * @return string 
     */
    public function getLinkdin()
    {
        return $this->linkdin;
    }

    /**
     * Set googleplus
     *
     * @param string $googleplus
     * @return Bands
     */
    public function setGoogleplus($googleplus)
    {
        $this->googleplus = $googleplus;

        return $this;
    }

    /**
     * Get googleplus
     *
     * @return string 
     */
    public function getGoogleplus()
    {
        return $this->googleplus;
    }

    /**
     * Set tributeto
     *
     * @param string $tributeto
     * @return Bands
     */
    public function setTributeto($tributeto)
    {
        $this->tributeto = $tributeto;

        return $this;
    }

    /**
     * Get tributeto
     *
     * @return string 
     */
    public function getTributeto()
    {
        return $this->tributeto;
    }

    /**
     * Set genre
     *
     * @param string $genre
     * @return Bands
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return string 
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set contactIdC
     *
     * @param string $contactIdC
     * @return Bands
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
     * Set actType
     *
     * @param string $actType
     * @return Bands
     */
    public function setActType($actType)
    {
        $this->actType = $actType;

        return $this;
    }

    /**
     * Get actType
     *
     * @return string 
     */
    public function getActType()
    {
        return $this->actType;
    }

    /**
     * Add fosusers
     *
     * @param \Stc\BaseBundle\Entity\FosUser $fosusers
     * @return Bands
     */
    public function addFosuser(\Stc\BaseBundle\Entity\FosUser $fosusers)
    {
        $this->fosusers[] = $fosusers;

        return $this;
    }

    /**
     * Remove fosusers
     *
     * @param \Stc\BaseBundle\Entity\FosUser $fosusers
     */
    public function removeFosuser(\Stc\BaseBundle\Entity\FosUser $fosusers)
    {
        $this->fosusers->removeElement($fosusers);
    }

    /**
     * Get fosusers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFosusers()
    {
        return $this->fosusers;
    }

    /**
     * Add contacts
     *
     * @param \Stc\MusiczarconiaBundle\Entity\Contacts $contacts
     * @return Bands
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
