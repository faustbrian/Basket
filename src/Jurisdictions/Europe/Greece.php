<?php

namespace BrianFaust\Basket\Jurisdictions\Europe;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\Europe\GreeceValueAddedTax;
use Money\Currency;

class Greece implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var GreeceValueAddedTax
     */
    private $tax;

    /**
     * Greece constructor.
     */
    public function __construct()
    {
        $this->tax = new GreeceValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return GreeceValueAddedTax
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
