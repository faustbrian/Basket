<?php

namespace BrianFaust\Basket\Jurisdictions\Europe;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\Europe\SerbiaValueAddedTax;
use Money\Currency;

class Serbia implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var SerbiaValueAddedTax
     */
    private $tax;

    /**
     * Serbia constructor.
     */
    public function __construct()
    {
        $this->tax = new SerbiaValueAddedTax();
        $this->currency = new Currency('RSD');
    }

    /**
     * @return SerbiaValueAddedTax
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
