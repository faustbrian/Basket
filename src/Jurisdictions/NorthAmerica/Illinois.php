<?php

namespace BrianFaust\Basket\Jurisdictions\NorthAmerica;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\NorthAmerica\IllinoisValueAddedTax;
use Money\Currency;

class Illinois implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var IllinoisValueAddedTax
     */
    private $tax;

    /**
     * Illinois constructor.
     */
    public function __construct()
    {
        $this->tax = new IllinoisValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return IllinoisValueAddedTax
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
