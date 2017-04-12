<?php



declare(strict_types=1);



namespace BrianFaust\Basket\Jurisdictions\Europe;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\TaxRates\Europe\LithuaniaValueAddedTax;
use Money\Currency;

class Lithuania implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var LithuaniaValueAddedTax
     */
    private $tax;

    /**
     * Lithuania constructor.
     */
    public function __construct()
    {
        $this->tax = new LithuaniaValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return LithuaniaValueAddedTax
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
