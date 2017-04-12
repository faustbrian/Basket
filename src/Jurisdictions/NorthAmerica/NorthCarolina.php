<?php



declare(strict_types=1);



namespace BrianFaust\Basket\Jurisdictions\NorthAmerica;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\TaxRates\NorthAmerica\NorthCarolinaValueAddedTax;
use Money\Currency;

class NorthCarolina implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var NorthCarolinaValueAddedTax
     */
    private $tax;

    /**
     * NorthCarolina constructor.
     */
    public function __construct()
    {
        $this->tax = new NorthCarolinaValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return NorthCarolinaValueAddedTax
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
