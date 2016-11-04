<?php

namespace BrianFaust\Basket\Jurisdictions\SouthAmerica;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\SouthAmerica\ChileValueAddedTax;
use Money\Currency;

class Chile implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var ChileValueAddedTax
     */
    private $tax;

    /**
     * Chile constructor.
     */
    public function __construct()
    {
        $this->tax = new ChileValueAddedTax();
        $this->currency = new Currency('CLP');
    }

    /**
     * @return ChileValueAddedTax
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
