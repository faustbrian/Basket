<?php

namespace DraperStudio\Basket\Jurisdictions\Europe;

use DraperStudio\Basket\Contracts\Jurisdiction;
use DraperStudio\Basket\TaxRates\Europe\AlbaniaValueAddedTax;
use Money\Currency;

class Albania implements Jurisdiction
{
    private $currency;

    private $tax;

    public function __construct()
    {
        $this->tax = new AlbaniaValueAddedTax();
        $this->currency = new Currency('ALL');
    }

    public function rate()
    {
        return $this->tax;
    }

    public function currency()
    {
        return $this->currency;
    }
}
