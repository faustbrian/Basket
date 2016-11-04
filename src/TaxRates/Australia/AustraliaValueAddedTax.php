<?php

namespace BrianFaust\Basket\TaxRates\Australia;

use BrianFaust\Basket\Contracts\TaxRate;

class AustraliaValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * AustraliaValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.10;
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
