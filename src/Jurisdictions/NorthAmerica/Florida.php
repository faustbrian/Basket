<?php



declare(strict_types=1);



namespace BrianFaust\Basket\Jurisdictions\NorthAmerica;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\TaxRates\NorthAmerica\FloridaValueAddedTax;
use Money\Currency;

class Florida implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var FloridaValueAddedTax
     */
    private $tax;

    /**
     * Florida constructor.
     */
    public function __construct()
    {
        $this->tax = new FloridaValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return FloridaValueAddedTax
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
