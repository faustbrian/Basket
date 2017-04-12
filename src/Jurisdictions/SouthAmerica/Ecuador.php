<?php



declare(strict_types=1);



namespace BrianFaust\Basket\Jurisdictions\SouthAmerica;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\TaxRates\SouthAmerica\EcuadorValueAddedTax;
use Money\Currency;

class Ecuador implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var EcuadorValueAddedTax
     */
    private $tax;

    /**
     * Ecuador constructor.
     */
    public function __construct()
    {
        $this->tax = new EcuadorValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return EcuadorValueAddedTax
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
