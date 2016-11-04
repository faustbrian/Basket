<?php

namespace BrianFaust\Basket\Jurisdictions\Europe;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\Europe\FranceValueAddedTax;
use Money\Currency;

class France implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var FranceValueAddedTax
     */
    private $tax;

    /**
     * France constructor.
     */
    public function __construct()
    {
        $this->tax = new FranceValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return FranceValueAddedTax
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
