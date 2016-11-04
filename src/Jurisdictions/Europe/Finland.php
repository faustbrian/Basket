<?php

namespace BrianFaust\Basket\Jurisdictions\Europe;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\Europe\FinlandValueAddedTax;
use Money\Currency;

class Finland implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var FinlandValueAddedTax
     */
    private $tax;

    /**
     * Finland constructor.
     */
    public function __construct()
    {
        $this->tax = new FinlandValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return FinlandValueAddedTax
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
