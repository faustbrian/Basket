<?php

namespace DraperStudio\Basket\TaxRates\Europe;

use DraperStudio\Basket\Contracts\TaxRate;

class BosniaHerzegovinaValueAddedTax implements TaxRate
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
