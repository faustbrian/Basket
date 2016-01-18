<?php

namespace DraperStudio\Basket\TaxRates\NorthAmerica;

use DraperStudio\Basket\Contracts\TaxRate;

class NevadaValueAddedTax implements TaxRate
{
    private $rate;

    public function __construct()
    {
        $this->rate = 0.0685;
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
