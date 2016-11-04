<?php

namespace BrianFaust\Basket\Jurisdictions\Europe;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\Europe\PortugalValueAddedTax;
use Money\Currency;

class Portugal implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var PortugalValueAddedTax
     */
    private $tax;

    /**
     * Portugal constructor.
     */
    public function __construct()
    {
        $this->tax = new PortugalValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return PortugalValueAddedTax
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
