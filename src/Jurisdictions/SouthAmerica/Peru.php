<?php

namespace DraperStudio\Basket\Jurisdictions\SouthAmerica;

use DraperStudio\Basket\Contracts\Jurisdiction;
use DraperStudio\Basket\TaxRates\SouthAmerica\PeruValueAddedTax;
use Money\Currency;

class Peru implements Jurisdiction
{
    private $currency;

    private $tax;

    public function __construct()
    {
        $this->tax = new PeruValueAddedTax();
        $this->currency = new Currency('PEN');
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
