<?php namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfResponseLocation extends BaseArrayOfType
{

    /**
     * The name of the array property this class is a wrapper of.
     */
    const WRAPPED_PROPERTY = 'ResponseLocation';

    /**
     * @var ResponseLocation|ResponseLocation[] $ResponseLocation
     */
    protected $ResponseLocation = null;

    /**
     * @param ResponseLocation|ResponseLocation[] $ResponseLocation
     */
    public function __construct($ResponseLocation)
    {
        $this->setResponseLocation($ResponseLocation);
    }

    /**
     * @return ResponseLocation|ResponseLocation[]
     */
    public function getResponseLocation()
    {
        return $this->ResponseLocation;
    }

    /**
     * @param ResponseLocation|ResponseLocation[] $ResponseLocation
     * @return $this
     */
    public function setResponseLocation($ResponseLocation)
    {
        $this->ResponseLocation = $ResponseLocation;

        return $this;
    }
}
