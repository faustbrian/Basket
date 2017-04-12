<?php



declare(strict_types=1);



namespace BrianFaust\Basket\Jurisdictions\Europe;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\TaxRates\Europe\TurkeyValueAddedTax;
use Money\Currency;

class Turkey implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var TurkeyValueAddedTax
     */
    private $tax;

    /**
     * Turkey constructor.
     */
    public function __construct()
    {
        $this->tax = new TurkeyValueAddedTax();
        $this->currency = new Currency('TRY');
    }

    /**
     * @return TurkeyValueAddedTax
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
