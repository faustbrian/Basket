<?php



declare(strict_types=1);



namespace BrianFaust\Basket\Jurisdictions\Europe;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\TaxRates\Europe\CyprusValueAddedTax;
use Money\Currency;

class Cyprus implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var CyprusValueAddedTax
     */
    private $tax;

    /**
     * Cyprus constructor.
     */
    public function __construct()
    {
        $this->tax = new CyprusValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return CyprusValueAddedTax
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
