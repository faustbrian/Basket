<?php

namespace BrianFaust\Basket\Jurisdictions\Europe;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\Europe\BelarusValueAddedTax;
use Money\Currency;

class Belarus implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var BelarusValueAddedTax
     */
    private $tax;

    /**
     * Belarus constructor.
     */
    public function __construct()
    {
        $this->tax = new BelarusValueAddedTax();
        $this->currency = new Currency('BYR');
    }

    /**
     * @return BelarusValueAddedTax
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
