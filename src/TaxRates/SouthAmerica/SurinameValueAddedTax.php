<?php



declare(strict_types=1);



namespace BrianFaust\Basket\TaxRates\SouthAmerica;

use BrianFaust\Basket\Contracts\TaxRate;

class SurinameValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * SurinameValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.08;
    }

    /**
     * @return float
     */
    public function float(): float
    {
        return $this->rate;
    }

    /**
     * @return int
     */
    public function percentage(): int
    {
        return intval($this->rate * 100);
    }
}
