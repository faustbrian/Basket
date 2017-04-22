<?php


declare(strict_types=1);



namespace BrianFaust\Basket\Jurisdictions\NorthAmerica;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\TaxRates\NorthAmerica\MassachusettsValueAddedTax;
use Money\Currency;

class Massachusetts implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var MassachusettsValueAddedTax
     */
    private $tax;

    /**
     * Massachusetts constructor.
     */
    public function __construct()
    {
        $this->tax = new MassachusettsValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return MassachusettsValueAddedTax
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
