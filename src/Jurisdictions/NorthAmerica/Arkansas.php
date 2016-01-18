<?php

namespace DraperStudio\Basket\Jurisdictions\NorthAmerica;

use DraperStudio\Basket\Contracts\Jurisdiction;
use DraperStudio\Basket\TaxRates\NorthAmerica\ArkansasValueAddedTax;
use Money\Currency;

class Arkansas implements Jurisdiction
{
    private $currency;

    private $tax;

    public function __construct()
    {
        $this->tax = new ArkansasValueAddedTax();
        $this->currency = new Currency('USD');
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
