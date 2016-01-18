<?php

namespace DraperStudio\Basket\Jurisdictions\SouthAmerica;

use DraperStudio\Basket\Contracts\Jurisdiction;
use DraperStudio\Basket\TaxRates\SouthAmerica\SurinameValueAddedTax;
use Money\Currency;

class Suriname implements Jurisdiction
{
    private $currency;

    private $tax;

    public function __construct()
    {
        $this->tax = new SurinameValueAddedTax();
        $this->currency = new Currency('SRD');
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
