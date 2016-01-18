<?php

namespace DraperStudio\Basket\TaxRates\SouthAmerica;

use DraperStudio\Basket\Contracts\TaxRate;

class EcuadorValueAddedTax implements TaxRate
{
    private $rate;

    public function __construct()
    {
        $this->rate = 0.12;
    }

    public function float()
    {
        return $this->rate;
    }

    public function percentage()
    {
        return intval($this->rate * 100);
    }
}
