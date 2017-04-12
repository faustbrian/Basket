<?php



declare(strict_types=1);



namespace BrianFaust\Basket\Jurisdictions\NorthAmerica;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\TaxRates\NorthAmerica\ColoradoValueAddedTax;
use Money\Currency;

class Colorado implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var ColoradoValueAddedTax
     */
    private $tax;

    /**
     * Colorado constructor.
     */
    public function __construct()
    {
        $this->tax = new ColoradoValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return ColoradoValueAddedTax
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
