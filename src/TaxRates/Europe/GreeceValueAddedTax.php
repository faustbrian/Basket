<?php


declare(strict_types=1);



namespace BrianFaust\Basket\TaxRates\Europe;

use BrianFaust\Basket\Contracts\TaxRate;

class GreeceValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * GreeceValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.23;
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
