<?php


declare(strict_types=1);



namespace BrianFaust\Basket\Jurisdictions\Europe;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\TaxRates\Europe\HungaryValueAddedTax;
use Money\Currency;

class Hungary implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var HungaryValueAddedTax
     */
    private $tax;

    /**
     * Hungary constructor.
     */
    public function __construct()
    {
        $this->tax = new HungaryValueAddedTax();
        $this->currency = new Currency('HUF');
    }

    /**
     * @return HungaryValueAddedTax
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
