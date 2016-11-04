<?php

namespace BrianFaust\Basket\Jurisdictions\NorthAmerica;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\NorthAmerica\VermontValueAddedTax;
use Money\Currency;

class Vermont implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var VermontValueAddedTax
     */
    private $tax;

    /**
     * Vermont constructor.
     */
    public function __construct()
    {
        $this->tax = new VermontValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return VermontValueAddedTax
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
