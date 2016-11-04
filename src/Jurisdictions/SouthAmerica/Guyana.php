<?php

namespace BrianFaust\Basket\Jurisdictions\SouthAmerica;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\SouthAmerica\GuyanaValueAddedTax;
use Money\Currency;

class Guyana implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var GuyanaValueAddedTax
     */
    private $tax;

    /**
     * Guyana constructor.
     */
    public function __construct()
    {
        $this->tax = new GuyanaValueAddedTax();
        $this->currency = new Currency('GYD');
    }

    /**
     * @return GuyanaValueAddedTax
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
