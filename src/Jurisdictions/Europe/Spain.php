<?php


declare(strict_types=1);



namespace BrianFaust\Basket\Jurisdictions\Europe;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\TaxRates\Europe\SpainValueAddedTax;
use Money\Currency;

class Spain implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var SpainValueAddedTax
     */
    private $tax;

    /**
     * Spain constructor.
     */
    public function __construct()
    {
        $this->tax = new SpainValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return SpainValueAddedTax
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
