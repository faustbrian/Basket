<?php

namespace BrianFaust\Basket\Jurisdictions\NorthAmerica;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\NorthAmerica\AlaskaValueAddedTax;
use Money\Currency;

class Alaska implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var AlaskaValueAddedTax
     */
    private $tax;

    /**
     * Alaska constructor.
     */
    public function __construct()
    {
        $this->tax = new AlaskaValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return AlaskaValueAddedTax
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
