<?php

namespace DraperStudio\Basket\Jurisdictions\Australia;

use DraperStudio\Basket\Contracts\Jurisdiction;
use DraperStudio\Basket\TaxRates\AustraliaValueAddedTax;
use Money\Currency;

class Australia implements Jurisdiction
{
    private $currency;

    private $tax;

    public function __construct()
    {
        $this->tax = new AustraliaValueAddedTax();
        $this->currency = new Currency('AUD');
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
