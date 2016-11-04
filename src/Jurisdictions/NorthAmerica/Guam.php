<?php

namespace BrianFaust\Basket\Jurisdictions\NorthAmerica;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\NorthAmerica\GuamValueAddedTax;
use Money\Currency;

class Guam implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var GuamValueAddedTax
     */
    private $tax;

    /**
     * Guam constructor.
     */
    public function __construct()
    {
        $this->tax = new GuamValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return GuamValueAddedTax
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
