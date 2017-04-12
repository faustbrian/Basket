<?php



declare(strict_types=1);



namespace BrianFaust\Basket\Jurisdictions\NorthAmerica;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\TaxRates\NorthAmerica\NewJerseyValueAddedTax;
use Money\Currency;

class NewJersey implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var NewJerseyValueAddedTax
     */
    private $tax;

    /**
     * NewJersey constructor.
     */
    public function __construct()
    {
        $this->tax = new NewJerseyValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return NewJerseyValueAddedTax
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
