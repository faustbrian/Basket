<?php



declare(strict_types=1);



namespace BrianFaust\Basket\Jurisdictions\NorthAmerica;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\TaxRates\NorthAmerica\GeorgiaValueAddedTax;
use Money\Currency;

class Georgia implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var GeorgiaValueAddedTax
     */
    private $tax;

    /**
     * Georgia constructor.
     */
    public function __construct()
    {
        $this->tax = new GeorgiaValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return GeorgiaValueAddedTax
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
