<?php

namespace BrianFaust\Basket\Jurisdictions\Europe;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\Europe\RomaniaValueAddedTax;
use Money\Currency;

class Romania implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var RomaniaValueAddedTax
     */
    private $tax;

    /**
     * Romania constructor.
     */
    public function __construct()
    {
        $this->tax = new RomaniaValueAddedTax();
        $this->currency = new Currency('RON');
    }

    /**
     * @return RomaniaValueAddedTax
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
