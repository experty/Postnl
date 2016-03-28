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

    /**
     * @param ArrayOfResponseLocation $LocationsResult
     * @return $this
     */
    public function setResults(ArrayOfResponseLocation $LocationsResult)
    {
        $this->GetLocationsResult = $LocationsResult;

        return $this;
    }
}
