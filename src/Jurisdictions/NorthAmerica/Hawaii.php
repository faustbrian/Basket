<?php



declare(strict_types=1);



namespace BrianFaust\Basket\Jurisdictions\NorthAmerica;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\TaxRates\NorthAmerica\HawaiiValueAddedTax;
use Money\Currency;

class Hawaii implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var HawaiiValueAddedTax
     */
    private $tax;

    /**
     * Hawaii constructor.
     */
    public function __construct()
    {
        $this->tax = new HawaiiValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return HawaiiValueAddedTax
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
