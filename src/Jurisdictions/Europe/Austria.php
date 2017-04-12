<?php



declare(strict_types=1);



namespace BrianFaust\Basket\Jurisdictions\Europe;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\TaxRates\Europe\AustriaValueAddedTax;
use Money\Currency;

class Austria implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var AustriaValueAddedTax
     */
    private $tax;

    /**
     * Austria constructor.
     */
    public function __construct()
    {
        $this->tax = new AustriaValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return AustriaValueAddedTax
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
