<?php


declare(strict_types=1);



namespace BrianFaust\Basket\Jurisdictions\NorthAmerica;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\TaxRates\NorthAmerica\IndianaValueAddedTax;
use Money\Currency;

class Indiana implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var IndianaValueAddedTax
     */
    private $tax;

    /**
     * Indiana constructor.
     */
    public function __construct()
    {
        $this->tax = new IndianaValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return IndianaValueAddedTax
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
