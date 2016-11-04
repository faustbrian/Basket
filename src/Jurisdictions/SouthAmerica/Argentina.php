<?php

namespace BrianFaust\Basket\Jurisdictions\SouthAmerica;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\SouthAmerica\ArgentinaValueAddedTax;
use Money\Currency;

class Argentina implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var ArgentinaValueAddedTax
     */
    private $tax;

    /**
     * Argentina constructor.
     */
    public function __construct()
    {
        $this->tax = new ArgentinaValueAddedTax();
        $this->currency = new Currency('ARS');
    }

    /**
     * @return ArgentinaValueAddedTax
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
