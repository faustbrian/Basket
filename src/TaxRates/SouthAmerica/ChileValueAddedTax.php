<?php

namespace BrianFaust\Basket\TaxRates\SouthAmerica;

use BrianFaust\Basket\Contracts\TaxRate;

class ChileValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * ChileValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.19;
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
