<?php

namespace BrianFaust\Basket\Jurisdictions\Europe;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\Europe\ItalyValueAddedTax;
use Money\Currency;

class Italy implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var ItalyValueAddedTax
     */
    private $tax;

    /**
     * Italy constructor.
     */
    public function __construct()
    {
        $this->tax = new ItalyValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return ItalyValueAddedTax
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
