<?php


declare(strict_types=1);



namespace BrianFaust\Basket\Jurisdictions\NorthAmerica;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\TaxRates\NorthAmerica\VirginiaValueAddedTax;
use Money\Currency;

class Virginia implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var VirginiaValueAddedTax
     */
    private $tax;

    /**
     * Virginia constructor.
     */
    public function __construct()
    {
        $this->tax = new VirginiaValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return VirginiaValueAddedTax
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
