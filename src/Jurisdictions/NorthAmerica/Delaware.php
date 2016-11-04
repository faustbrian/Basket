<?php

namespace BrianFaust\Basket\Jurisdictions\NorthAmerica;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\NorthAmerica\DelawareValueAddedTax;
use Money\Currency;

class Delaware implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var DelawareValueAddedTax
     */
    private $tax;

    /**
     * Delaware constructor.
     */
    public function __construct()
    {
        $this->tax = new DelawareValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return DelawareValueAddedTax
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
