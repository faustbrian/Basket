<?php


declare(strict_types=1);



namespace BrianFaust\Basket\Jurisdictions\NorthAmerica;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\TaxRates\NorthAmerica\AlabamaValueAddedTax;
use Money\Currency;

class Alabama implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var AlabamaValueAddedTax
     */
    private $tax;

    /**
     * Alabama constructor.
     */
    public function __construct()
    {
        $this->tax = new AlabamaValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return AlabamaValueAddedTax
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
