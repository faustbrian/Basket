<?php

namespace DraperStudio\Basket\TaxRates\Europe;

use DraperStudio\Basket\Contracts\TaxRate;

class DenmarkValueAddedTax implements TaxRate
{
    private $rate;

    public function __construct()
    {
        $this->rate = 0.25;
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
