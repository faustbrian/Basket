<?php

namespace BrianFaust\Basket\Jurisdictions\Europe;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\Europe\MontenegroValueAddedTax;
use Money\Currency;

class Montenegro implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var MontenegroValueAddedTax
     */
    private $tax;

    /**
     * Montenegro constructor.
     */
    public function __construct()
    {
        $this->tax = new MontenegroValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return MontenegroValueAddedTax
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
