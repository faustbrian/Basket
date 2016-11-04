<?php

namespace BrianFaust\Basket\Jurisdictions\Europe;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\Europe\BelgiumValueAddedTax;
use Money\Currency;

class Belgium implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var BelgiumValueAddedTax
     */
    private $tax;

    /**
     * Belgium constructor.
     */
    public function __construct()
    {
        $this->tax = new BelgiumValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return BelgiumValueAddedTax
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
