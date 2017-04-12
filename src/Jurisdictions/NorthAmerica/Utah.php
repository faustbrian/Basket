<?php



declare(strict_types=1);



namespace BrianFaust\Basket\Jurisdictions\NorthAmerica;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\TaxRates\NorthAmerica\UtahValueAddedTax;
use Money\Currency;

class Utah implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var UtahValueAddedTax
     */
    private $tax;

    /**
     * Utah constructor.
     */
    public function __construct()
    {
        $this->tax = new UtahValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return UtahValueAddedTax
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
