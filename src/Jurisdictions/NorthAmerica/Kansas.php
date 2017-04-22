<?php


declare(strict_types=1);



namespace BrianFaust\Basket\Jurisdictions\NorthAmerica;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\TaxRates\NorthAmerica\KansasValueAddedTax;
use Money\Currency;

class Kansas implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var KansasValueAddedTax
     */
    private $tax;

    /**
     * Kansas constructor.
     */
    public function __construct()
    {
        $this->tax = new KansasValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return KansasValueAddedTax
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
