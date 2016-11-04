<?php

namespace BrianFaust\Basket\Jurisdictions\NorthAmerica;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\NorthAmerica\NewHampshireValueAddedTax;
use Money\Currency;

class NewHampshire implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var NewHampshireValueAddedTax
     */
    private $tax;

    /**
     * NewHampshire constructor.
     */
    public function __construct()
    {
        $this->tax = new NewHampshireValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return NewHampshireValueAddedTax
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
