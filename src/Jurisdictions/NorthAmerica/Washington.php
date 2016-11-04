<?php

namespace BrianFaust\Basket\Jurisdictions\NorthAmerica;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\NorthAmerica\WashingtonValueAddedTax;
use Money\Currency;

class Washington implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var WashingtonValueAddedTax
     */
    private $tax;

    /**
     * Washington constructor.
     */
    public function __construct()
    {
        $this->tax = new WashingtonValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return WashingtonValueAddedTax
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
