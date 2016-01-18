<?php

namespace DraperStudio\Basket\TaxRates\NorthAmerica;

use DraperStudio\Basket\Contracts\TaxRate;

class SouthCarolinaValueAddedTax implements TaxRate
{
    private $rate;

    public function __construct()
    {
        $this->rate = 0.06;
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
