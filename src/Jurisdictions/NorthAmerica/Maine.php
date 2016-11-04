<?php

namespace BrianFaust\Basket\Jurisdictions\NorthAmerica;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\NorthAmerica\MaineValueAddedTax;
use Money\Currency;

class Maine implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var MaineValueAddedTax
     */
    private $tax;

    /**
     * Maine constructor.
     */
    public function __construct()
    {
        $this->tax = new MaineValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return MaineValueAddedTax
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
