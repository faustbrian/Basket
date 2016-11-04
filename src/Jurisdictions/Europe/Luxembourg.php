<?php

namespace BrianFaust\Basket\Jurisdictions\Europe;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\Europe\LuxembourgValueAddedTax;
use Money\Currency;

class Luxembourg implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var LuxembourgValueAddedTax
     */
    private $tax;

    /**
     * Luxembourg constructor.
     */
    public function __construct()
    {
        $this->tax = new LuxembourgValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return LuxembourgValueAddedTax
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
