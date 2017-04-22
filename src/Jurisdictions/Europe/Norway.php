<?php


declare(strict_types=1);



namespace BrianFaust\Basket\Jurisdictions\Europe;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\TaxRates\Europe\NorwayValueAddedTax;
use Money\Currency;

class Norway implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var NorwayValueAddedTax
     */
    private $tax;

    /**
     * Norway constructor.
     */
    public function __construct()
    {
        $this->tax = new NorwayValueAddedTax();
        $this->currency = new Currency('NOK');
    }

    /**
     * @return NorwayValueAddedTax
     */
    public function rate() : TaxRate
    {
        return $this->tax;
    }

    /**
     * @return Currency
     */
    public function currency() : Currency
    {
        return $this->currency;
    }
}
