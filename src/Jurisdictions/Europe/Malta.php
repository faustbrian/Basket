<?php

namespace BrianFaust\Basket\Jurisdictions\Europe;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\Europe\MaltaValueAddedTax;
use Money\Currency;

class Malta implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var MaltaValueAddedTax
     */
    private $tax;

    /**
     * Malta constructor.
     */
    public function __construct()
    {
        $this->tax = new MaltaValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return MaltaValueAddedTax
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
