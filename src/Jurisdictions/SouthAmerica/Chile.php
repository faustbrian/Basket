<?php

namespace DraperStudio\Basket\Jurisdictions\SouthAmerica;

use DraperStudio\Basket\Contracts\Jurisdiction;
use DraperStudio\Basket\TaxRates\SouthAmerica\ChileValueAddedTax;
use Money\Currency;

class Chile implements Jurisdiction
{
    private $currency;

    private $tax;

    public function __construct()
    {
        $this->tax = new ChileValueAddedTax();
        $this->currency = new Currency('CLP');
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
