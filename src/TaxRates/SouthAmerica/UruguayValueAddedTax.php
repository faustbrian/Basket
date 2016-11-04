<?php

namespace BrianFaust\Basket\TaxRates\SouthAmerica;

use BrianFaust\Basket\Contracts\TaxRate;

class UruguayValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * UruguayValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.22;
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
