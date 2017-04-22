<?php


declare(strict_types=1);



namespace BrianFaust\Basket;

class Percent
{
    /**
     * @var
     */
    private $value;

    /**
     * Percent constructor.
     *
     * @param $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function int()
    {
        return $this->value;
    }
}
