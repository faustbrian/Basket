<?php

namespace BrianFaust\Basket\Jurisdictions\NorthAmerica;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\NorthAmerica\CaliforniaValueAddedTax;
use Money\Currency;

class California implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var CaliforniaValueAddedTax
     */
    private $tax;

    /**
     * California constructor.
     */
    public function __construct()
    {
        $this->tax = new CaliforniaValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return CaliforniaValueAddedTax
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
