<?php namespace DivideBV\Postnl\ComplexTypes;

class GetLocationResponse extends BaseType
{
    /**
     * @var ArrayOfResponseLocation
     */
    protected $GetLocationsResult;

    /**
     * @return ArrayOfResponseLocation
     */
    public function getResults()
    {
        return $this->GetLocationsResult;
    }
}
