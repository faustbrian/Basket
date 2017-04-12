<?php



declare(strict_types=1);



namespace BrianFaust\Basket\Jurisdictions\NorthAmerica;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\TaxRates\NorthAmerica\NorthDakotaValueAddedTax;
use Money\Currency;

class NorthDakota implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var NorthDakotaValueAddedTax
     */
    private $tax;

    /**
     * NorthDakota constructor.
     */
    public function __construct()
    {
        $this->tax = new NorthDakotaValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return NorthDakotaValueAddedTax
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
