<?php

namespace BrianFaust\Basket\Jurisdictions\Europe;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\Europe\PolandValueAddedTax;
use Money\Currency;

class Poland implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var PolandValueAddedTax
     */
    private $tax;

    /**
     * Poland constructor.
     */
    public function __construct()
    {
        $this->tax = new PolandValueAddedTax();
        $this->currency = new Currency('PLN');
    }

    /**
     * @return PolandValueAddedTax
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
