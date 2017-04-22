<?php


declare(strict_types=1);



namespace BrianFaust\Basket\Jurisdictions\NorthAmerica;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\TaxRates\NorthAmerica\LouisianaValueAddedTax;
use Money\Currency;

class Louisiana implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var LouisianaValueAddedTax
     */
    private $tax;

    /**
     * Louisiana constructor.
     */
    public function __construct()
    {
        $this->tax = new LouisianaValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return LouisianaValueAddedTax
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
