<?php

namespace BrianFaust\Basket\TaxRates\NorthAmerica;

use BrianFaust\Basket\Contracts\TaxRate;

class ConnecticutValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * ConnecticutValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.635;
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
