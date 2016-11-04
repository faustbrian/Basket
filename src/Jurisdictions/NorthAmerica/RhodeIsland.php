<?php

namespace BrianFaust\Basket\Jurisdictions\NorthAmerica;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\NorthAmerica\RhodeIslandValueAddedTax;
use Money\Currency;

class RhodeIsland implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var RhodeIslandValueAddedTax
     */
    private $tax;

    /**
     * RhodeIsland constructor.
     */
    public function __construct()
    {
        $this->tax = new RhodeIslandValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return RhodeIslandValueAddedTax
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
