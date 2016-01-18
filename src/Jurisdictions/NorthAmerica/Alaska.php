<?php

namespace DraperStudio\Basket\Jurisdictions\NorthAmerica;

use DraperStudio\Basket\Contracts\Jurisdiction;
use DraperStudio\Basket\TaxRates\NorthAmerica\AlaskaValueAddedTax;
use Money\Currency;

class Alaska implements Jurisdiction
{
    private $currency;

    private $tax;

    public function __construct()
    {
        $this->tax = new AlaskaValueAddedTax();
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
