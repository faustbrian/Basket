<?php

namespace BrianFaust\Basket\Jurisdictions\Europe;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\Europe\GermanyValueAddedTax;
use Money\Currency;

class Germany implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var GermanyValueAddedTax
     */
    private $tax;

    /**
     * Germany constructor.
     */
    public function __construct()
    {
        $this->tax = new GermanyValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return GermanyValueAddedTax
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
