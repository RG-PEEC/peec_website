<?php
namespace PEEC\PeecExtension\Domain;

class Filter {
    public function __construct(array $settings = [])
    {
        foreach ($settings as $propertyName => $value) {
            //if property of filter class exists
            if (property_exists(__CLASS__, $propertyName)) {
                $this->$propertyName = $value;
            }
        }
    }

    /** @var int  */
    protected $minYear = 0;

    /** @var int  */
    protected $maxYear = 0;

    /** @var string  */
    protected $type = '';

    /** @var int  */
    protected $employee = 0;

    /** @var int  */
    protected $category = 0;


    /**
     * @param int $projectfromYear
     */
    public function setProjectfromYear(int $projectfromYear): void
    {
        $this->projectfromYear = $projectfromYear;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getCategory(): int
    {
        return $this->category;
    }

    /**
     * @param int $category
     */
    public function setCategory(int $category): void
    {
        $this->category = $category;
    }

    /**
     * @return int
     */
    public function getEmployee(): int
    {
        return $this->employee;
    }

    /**
     * @param int $employee
     */
    public function setEmployee(int $employee): void
    {
        $this->employee = $employee;
    }

    /**
     * @return int
     */
    public function getMinYear(): int
    {
        return $this->minYear;
    }

    /**
     * @param int $minYear
     */
    public function setMinYear(int $minYear): void
    {
        $this->minYear = $minYear;
    }

    /**
     * @return int
     */
    public function getMaxYear(): int
    {
        return $this->maxYear;
    }

    /**
     * @param int $maxYear
     */
    public function setMaxYear(int $maxYear): void
    {
        $this->maxYear = $maxYear;
    }
}
