<?php



declare(strict_types=1);



namespace BrianFaust\Basket\Jurisdictions\Europe;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\TaxRates\Europe\SwitzerlandValueAddedTax;
use Money\Currency;

class Switzerland implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var SwitzerlandValueAddedTax
     */
    private $tax;

    /**
     * Switzerland constructor.
     */
    public function __construct()
    {
        $this->tax = new SwitzerlandValueAddedTax();
        $this->currency = new Currency('CHF');
    }

    /**
     * @return SwitzerlandValueAddedTax
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
