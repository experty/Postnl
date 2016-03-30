<?php namespace DivideBV\Postnl\ComplexTypes;

class OpeningHours extends BaseType
{

    /**
     * @var string[]
     */
    protected $Friday = [];

    /**
     * @var string[]
     */
    protected $Monday = [];

    /**
     * @var string[]
     */
    protected $Saturday = [];

    /**
     * @var string[]
     */
    protected $Sunday = [];

    /**
     * @var string[]
     */
    protected $Thursday = [];

    /**
     * @var string[]
     */
    protected $Tuesday = [];

    /**
     * @var string[]
     */
    protected $Wednesday = [];

    /**
     * @return string[][]
     */
    public function getAll()
    {
        return [
            'Monday' => $this->Monday,
            'Tuesday' => $this->Tuesday,
            'Wednesday' => $this->Wednesday,
            'Thursday' => $this->Thursday,
            'Friday' => $this->Friday,
            'Saturday' => $this->Saturday,
            'Sunday' => $this->Sunday
        ];
    }
}
