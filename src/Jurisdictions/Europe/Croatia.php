<?php

namespace DraperStudio\Basket\Jurisdictions\Europe;

use DraperStudio\Basket\Contracts\Jurisdiction;
use DraperStudio\Basket\TaxRates\Europe\CrotiaValueAddedTax;
use Money\Currency;

class Croatia implements Jurisdiction
{
    private $currency;

    private $tax;

    public function __construct()
    {
        $this->tax = new CrotiaValueAddedTax();
        $this->currency = new Currency('HRK');
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
