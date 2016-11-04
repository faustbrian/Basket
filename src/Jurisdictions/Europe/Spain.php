<?php

namespace BrianFaust\Basket\Jurisdictions\Europe;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\Europe\SpainValueAddedTax;
use Money\Currency;

class Spain implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var SpainValueAddedTax
     */
    private $tax;

    /**
     * Spain constructor.
     */
    public function __construct()
    {
        $this->tax = new SpainValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return SpainValueAddedTax
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
