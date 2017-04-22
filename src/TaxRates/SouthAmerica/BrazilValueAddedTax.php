<?php


declare(strict_types=1);



namespace BrianFaust\Basket\TaxRates\SouthAmerica;

use BrianFaust\Basket\Contracts\TaxRate;

class BrazilValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * BrazilValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.17;
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
