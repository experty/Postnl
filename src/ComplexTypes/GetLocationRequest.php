<?php namespace DivideBV\Postnl\ComplexTypes;

class GetLocationRequest extends BaseType
{

    /**
     * @var Message $Message
     */
    protected $Message = null;

    /**
     * @var string $LocationCode
     */
    protected $LocationCode = null;

    /**
     * @var string $RetailNetworkID
     */
    protected $RetailNetworkID = null;


    /**
     * GetNearestLocationsRequest constructor.
     * @param Message $Message
     * @param string $LocationCode
     * @param string $RetailNetworkID
     */
    public function __construct(
        Message $Message,
        $LocationCode,
        $RetailNetworkID
    ) {
        $this->setMessage($Message);
        $this->setLocationCode($LocationCode);
        $this->setRetailNetworkID($RetailNetworkID);
    }

    /**
     * @return Message
     */
    public function getMessage()
    {
        return $this->Message;
    }

    /**
     * @param Message $Message
     */
    public function setMessage($Message)
    {
        $this->Message = $Message;
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
     */
    public function setLocationCode($LocationCode)
    {
        $this->LocationCode = $LocationCode;
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
     */
    public function setRetailNetworkID($RetailNetworkID)
    {
        $this->RetailNetworkID = $RetailNetworkID;
    }
}
