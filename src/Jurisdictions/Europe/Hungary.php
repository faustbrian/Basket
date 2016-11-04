<?php

namespace BrianFaust\Basket\Jurisdictions\Europe;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\Europe\HungaryValueAddedTax;
use Money\Currency;

class Hungary implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var HungaryValueAddedTax
     */
    private $tax;

    /**
     * Hungary constructor.
     */
    public function __construct()
    {
        $this->tax = new HungaryValueAddedTax();
        $this->currency = new Currency('HUF');
    }

    /**
     * @return HungaryValueAddedTax
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
