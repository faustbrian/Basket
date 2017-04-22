<?php


declare(strict_types=1);



namespace BrianFaust\Basket\Jurisdictions\NorthAmerica;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\TaxRates\NorthAmerica\RhodeIslandValueAddedTax;
use Money\Currency;

class RhodeIsland implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var RhodeIslandValueAddedTax
     */
    private $tax;

    /**
     * RhodeIsland constructor.
     */
    public function __construct()
    {
        $this->tax = new RhodeIslandValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return RhodeIslandValueAddedTax
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
