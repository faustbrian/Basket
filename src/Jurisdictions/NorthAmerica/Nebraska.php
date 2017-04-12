<?php



declare(strict_types=1);



namespace BrianFaust\Basket\Jurisdictions\NorthAmerica;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\TaxRates\NorthAmerica\NebraskaValueAddedTax;
use Money\Currency;

class Nebraska implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var NebraskaValueAddedTax
     */
    private $tax;

    /**
     * Nebraska constructor.
     */
    public function __construct()
    {
        $this->tax = new NebraskaValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return NebraskaValueAddedTax
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
