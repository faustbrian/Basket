<?php

namespace BrianFaust\Basket\Jurisdictions\NorthAmerica;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\NorthAmerica\AustriaValueAddedTax;
use Money\Currency;

class Arizona implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var AustriaValueAddedTax
     */
    private $tax;

    /**
     * Arizona constructor.
     */
    public function __construct()
    {
        $this->tax = new AustriaValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return AustriaValueAddedTax
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
