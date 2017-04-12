<?php



declare(strict_types=1);



namespace BrianFaust\Basket\Jurisdictions\NorthAmerica;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\TaxRates\NorthAmerica\WisconsinValueAddedTax;
use Money\Currency;

class Wisconsin implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var WisconsinValueAddedTax
     */
    private $tax;

    /**
     * Wisconsin constructor.
     */
    public function __construct()
    {
        $this->tax = new WisconsinValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return WisconsinValueAddedTax
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
