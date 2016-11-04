<?php

namespace BrianFaust\Basket\Jurisdictions\NorthAmerica;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\NorthAmerica\PuertoRicoValueAddedTax;
use Money\Currency;

class PuertoRico implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var PuertoRicoValueAddedTax
     */
    private $tax;

    /**
     * PuertoRico constructor.
     */
    public function __construct()
    {
        $this->tax = new PuertoRicoValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return PuertoRicoValueAddedTax
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
