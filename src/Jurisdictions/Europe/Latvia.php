<?php

namespace BrianFaust\Basket\Jurisdictions\Europe;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\Europe\LatviaValueAddedTax;
use Money\Currency;

class Latvia implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var LatviaValueAddedTax
     */
    private $tax;

    /**
     * Latvia constructor.
     */
    public function __construct()
    {
        $this->tax = new LatviaValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return LatviaValueAddedTax
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
