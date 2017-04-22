<?php


declare(strict_types=1);



namespace BrianFaust\Basket\TaxRates\Europe;

use BrianFaust\Basket\Contracts\TaxRate;

class ItalyValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * ItalyValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.22;
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
