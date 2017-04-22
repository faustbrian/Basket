<?php


declare(strict_types=1);



namespace BrianFaust\Basket\Jurisdictions\NorthAmerica;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\TaxRates\NorthAmerica\OregonValueAddedTax;
use Money\Currency;

class Oregon implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var OregonValueAddedTax
     */
    private $tax;

    /**
     * Oregon constructor.
     */
    public function __construct()
    {
        $this->tax = new OregonValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return OregonValueAddedTax
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
