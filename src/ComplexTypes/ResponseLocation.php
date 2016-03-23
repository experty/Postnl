<?php namespace DivideBV\Postnl\ComplexTypes;

class ResponseLocation extends BaseType
{
    /**
     * @var Address
     */
    protected $Address = null;

    /**
     * @var string[]
     */
    protected $DeliveryOptions = [];

    /**
     * @var string
     */
    protected $Distance = null;

    /**
     * @var string
     */
    protected $Latitude = null;

    /**
     * @var string
     */
    protected $LocationCode = null;

    /**
     * @var string
     */
    protected $Longitude = null;

    /**
     * @var string
     */
    protected $Name = null;

    /**
     * @var OpeningHours
     */
    protected $OpeningHours = null;

    /**
     * @var string
     */
    protected $PartnerName = null;

    /**
     * @var string
     */
    protected $PhoneNumber = null;

    /**
     * @var string
     */
    protected $RetailNetworkID = null;

    /**
     * @return Address
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * @param Address $Address
     * @return $this
     */
    public function setAddress($Address)
    {
        $this->Address = $Address;
        return $this;
    }

    /**
     * @return \string[]
     */
    public function getDeliveryOptions()
    {
        return $this->DeliveryOptions;
    }

    /**
     * @param \string[] $DeliveryOptions
     * @return $this
     */
    public function setDeliveryOptions($DeliveryOptions)
    {
        $this->DeliveryOptions = $DeliveryOptions;
        return $this;
    }

    /**
     * @return string
     */
    public function getDistance()
    {
        return $this->Distance;
    }

    /**
     * @param string $Distance
     * @return $this
     */
    public function setDistance($Distance)
    {
        $this->Distance = $Distance;
        return $this;
    }

    /**
     * @return string
     */
    public function getLatitude()
    {
        return $this->Latitude;
    }

    /**
     * @param string $Latitude
     * @return $this
     */
    public function setLatitude($Latitude)
    {
        $this->Latitude = $Latitude;
        return $this;
    }

    /**
     * @return string
     */
    public function getLocationCode()
    {
        return $this->LocationCode;
    }

    /**
     * @param string $LocationCode
     * @return $this
     */
    public function setLocationCode($LocationCode)
    {
        $this->LocationCode = $LocationCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getLongitude()
    {
        return $this->Longitude;
    }

    /**
     * @param string $Longitude
     * @return $this
     */
    public function setLongitude($Longitude)
    {
        $this->Longitude = $Longitude;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return $this
     */
    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * @return OpeningHours
     */
    public function getOpeningHours()
    {
        return $this->OpeningHours;
    }

    /**
     * @param OpeningHours $OpeningHours
     * @return $this
     */
    public function setOpeningHours($OpeningHours)
    {
        $this->OpeningHours = $OpeningHours;
        return $this;
    }

    /**
     * @return string
     */
    public function getPartnerName()
    {
        return $this->PartnerName;
    }

    /**
     * @param string $PartnerName
     * @return $this
     */
    public function setPartnerName($PartnerName)
    {
        $this->PartnerName = $PartnerName;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }

    /**
     * @param string $PhoneNumber
     * @return $this
     */
    public function setPhoneNumber($PhoneNumber)
    {
        $this->PhoneNumber = $PhoneNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getRetailNetworkID()
    {
        return $this->RetailNetworkID;
    }

    /**
     * @param string $RetailNetworkID
     * @return $this
     */
    public function setRetailNetworkID($RetailNetworkID)
    {
        $this->RetailNetworkID = $RetailNetworkID;
        return $this;
    }

}
