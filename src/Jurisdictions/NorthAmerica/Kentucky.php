<?php

namespace BrianFaust\Basket\Jurisdictions\NorthAmerica;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\NorthAmerica\KentuckyValueAddedTax;
use Money\Currency;

class Kentucky implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var KentuckyValueAddedTax
     */
    private $tax;

    /**
     * Kentucky constructor.
     */
    public function __construct()
    {
        $this->tax = new KentuckyValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return KentuckyValueAddedTax
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
