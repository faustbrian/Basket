<?php

namespace BrianFaust\Basket\Jurisdictions\SouthAmerica;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\SouthAmerica\BrazilValueAddedTax;
use Money\Currency;

class Brazil implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var BrazilValueAddedTax
     */
    private $tax;

    /**
     * Brazil constructor.
     */
    public function __construct()
    {
        $this->tax = new BrazilValueAddedTax();
        $this->currency = new Currency('BRL');
    }

    /**
     * @return BrazilValueAddedTax
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
