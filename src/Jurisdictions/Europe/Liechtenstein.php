<?php

namespace BrianFaust\Basket\Jurisdictions\Europe;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\Europe\LiechtensteinValueAddedTax;
use Money\Currency;

class Liechtenstein implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var LiechtensteinValueAddedTax
     */
    private $tax;

    /**
     * Liechtenstein constructor.
     */
    public function __construct()
    {
        $this->tax = new LiechtensteinValueAddedTax();
        $this->currency = new Currency('CHF');
    }

    /**
     * @return LiechtensteinValueAddedTax
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
