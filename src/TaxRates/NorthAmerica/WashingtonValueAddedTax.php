<?php

namespace BrianFaust\Basket\TaxRates\NorthAmerica;

use BrianFaust\Basket\Contracts\TaxRate;

class WashingtonValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * WashingtonValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.065;
    }

    /**
     * @return float
     */
    public function float()
    {
        return $this->rate;
    }

    /**
     * @return int
     */
    public function percentage()
    {
        return intval($this->rate * 100);
    }
}
