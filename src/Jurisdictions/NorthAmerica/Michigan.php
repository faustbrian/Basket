<?php

namespace BrianFaust\Basket\Jurisdictions\NorthAmerica;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\NorthAmerica\MichiganValueAddedTax;
use Money\Currency;

class Michigan implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var MichiganValueAddedTax
     */
    private $tax;

    /**
     * Michigan constructor.
     */
    public function __construct()
    {
        $this->tax = new MichiganValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return MichiganValueAddedTax
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
