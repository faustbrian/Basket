<?php

namespace BrianFaust\Basket\Jurisdictions\NorthAmerica;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\NorthAmerica\OklahomaValueAddedTax;
use Money\Currency;

class Oklahoma implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var OklahomaValueAddedTax
     */
    private $tax;

    /**
     * Oklahoma constructor.
     */
    public function __construct()
    {
        $this->tax = new OklahomaValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return OklahomaValueAddedTax
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
