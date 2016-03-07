<?php namespace DivideBV\Postnl\ComplexTypes;

class GetLocationsResponse extends BaseType
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
