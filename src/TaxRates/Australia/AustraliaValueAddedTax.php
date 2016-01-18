<?php

namespace DraperStudio\Basket\TaxRates\Australia;

use DraperStudio\Basket\Contracts\TaxRate;

class AustraliaValueAddedTax implements TaxRate
{
    private $rate;

    public function __construct()
    {
        $this->rate = 0.10;
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
