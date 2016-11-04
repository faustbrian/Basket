<?php

namespace BrianFaust\Basket\TaxRates\Europe;

use BrianFaust\Basket\Contracts\TaxRate;

class LiechtensteinValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * LiechtensteinValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.08;
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
