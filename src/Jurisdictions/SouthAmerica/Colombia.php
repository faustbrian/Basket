<?php

namespace BrianFaust\Basket\Jurisdictions\SouthAmerica;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\SouthAmerica\ColombiaValueAddedTax;
use Money\Currency;

class Colombia implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var ColombiaValueAddedTax
     */
    private $tax;

    /**
     * Colombia constructor.
     */
    public function __construct()
    {
        $this->tax = new ColombiaValueAddedTax();
        $this->currency = new Currency('COP');
    }

    /**
     * @return ColombiaValueAddedTax
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
