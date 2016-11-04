<?php

namespace BrianFaust\Basket\Jurisdictions\Europe;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\Europe\DenmarkValueAddedTax;
use Money\Currency;

class Denmark implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var DenmarkValueAddedTax
     */
    private $tax;

    /**
     * Denmark constructor.
     */
    public function __construct()
    {
        $this->tax = new DenmarkValueAddedTax();
        $this->currency = new Currency('DKK');
    }

    /**
     * @return DenmarkValueAddedTax
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
