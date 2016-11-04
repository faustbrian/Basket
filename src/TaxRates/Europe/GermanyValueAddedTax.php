<?php

namespace BrianFaust\Basket\TaxRates\Europe;

use BrianFaust\Basket\Contracts\TaxRate;

class GermanyValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * GermanyValueAddedTax constructor.
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
