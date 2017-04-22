<?php


declare(strict_types=1);



namespace BrianFaust\Basket\Jurisdictions\NorthAmerica;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\TaxRates\NorthAmerica\MarylandValueAddedTax;
use Money\Currency;

class Maryland implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var MarylandValueAddedTax
     */
    private $tax;

    /**
     * Maryland constructor.
     */
    public function __construct()
    {
        $this->tax = new MarylandValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return MarylandValueAddedTax
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
