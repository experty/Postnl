<?php namespace DivideBV\Postnl\ComplexTypes;

class GetLocationResponse extends BaseType
{
    /**
     * @var ResponseLocation
     */
    protected $GetLocationResult;

    /**
     * @return ResponseLocation
     */
    public function getResult()
    {
        return $this->GetLocationResult;
    }

    /**
     * @param ResponseLocation $LocationResult
     * @return $this
     */
    public function setResult(ResponseLocation $LocationResult)
    {
        $this->GetLocationResult = $LocationResult;

        return $this;
    }
}
