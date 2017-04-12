<?php



declare(strict_types=1);



namespace BrianFaust\Basket\Jurisdictions\NorthAmerica;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\TaxRates\NorthAmerica\NewMexicoValueAddedTax;
use Money\Currency;

class NewMexico implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var NewMexicoValueAddedTax
     */
    private $tax;

    /**
     * NewMexico constructor.
     */
    public function __construct()
    {
        $this->tax = new NewMexicoValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return NewMexicoValueAddedTax
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
