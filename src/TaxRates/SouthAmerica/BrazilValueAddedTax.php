<?php

namespace DraperStudio\Basket\TaxRates\SouthAmerica;

use DraperStudio\Basket\Contracts\TaxRate;

class BrazilValueAddedTax implements TaxRate
{
    private $rate;

    public function __construct()
    {
        $this->rate = 0.17;
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
