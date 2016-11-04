<?php

namespace BrianFaust\Basket\Jurisdictions\Europe;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\Europe\UkraineValueAddedTax;
use Money\Currency;

class Ukraine implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var UkraineValueAddedTax
     */
    private $tax;

    /**
     * Ukraine constructor.
     */
    public function __construct()
    {
        $this->tax = new UkraineValueAddedTax();
        $this->currency = new Currency('UAH');
    }

    /**
     * @return UkraineValueAddedTax
     */
    public function rate()
    {
        return $this->tax;
    }

    /**
     * @return Currency
     */
    public function currency()
    {
        return $this->currency;
    }
}
