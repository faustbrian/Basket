<?php



declare(strict_types=1);



namespace BrianFaust\Basket\Jurisdictions\NorthAmerica;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\TaxRates\NorthAmerica\SouthDakotaValueAddedTax;
use Money\Currency;

class SouthDakota implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var SouthDakotaValueAddedTax
     */
    private $tax;

    /**
     * SouthDakota constructor.
     */
    public function __construct()
    {
        $this->tax = new SouthDakotaValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return SouthDakotaValueAddedTax
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
