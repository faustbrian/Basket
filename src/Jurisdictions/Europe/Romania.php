<?php


declare(strict_types=1);



namespace BrianFaust\Basket\Jurisdictions\Europe;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\TaxRates\Europe\RomaniaValueAddedTax;
use Money\Currency;

class Romania implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var RomaniaValueAddedTax
     */
    private $tax;

    /**
     * Romania constructor.
     */
    public function __construct()
    {
        $this->tax = new RomaniaValueAddedTax();
        $this->currency = new Currency('RON');
    }

    /**
     * @return RomaniaValueAddedTax
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
