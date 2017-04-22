<?php


declare(strict_types=1);



namespace BrianFaust\Basket\Jurisdictions\SouthAmerica;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\TaxRates\SouthAmerica\UruguayValueAddedTax;
use Money\Currency;

class Uruguay implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var UruguayValueAddedTax
     */
    private $tax;

    /**
     * Uruguay constructor.
     */
    public function __construct()
    {
        $this->tax = new UruguayValueAddedTax();
        $this->currency = new Currency('UYU');
    }

    /**
     * @return UruguayValueAddedTax
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
