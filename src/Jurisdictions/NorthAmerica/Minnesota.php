<?php



declare(strict_types=1);



namespace BrianFaust\Basket\Jurisdictions\NorthAmerica;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\TaxRates\NorthAmerica\MinnesotaValueAddedTax;
use Money\Currency;

class Minnesota implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var MinnesotaValueAddedTax
     */
    private $tax;

    /**
     * Minnesota constructor.
     */
    public function __construct()
    {
        $this->tax = new MinnesotaValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return MinnesotaValueAddedTax
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
