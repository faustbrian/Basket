<?php


declare(strict_types=1);



namespace BrianFaust\Basket\TaxRates\Europe;

use BrianFaust\Basket\Contracts\TaxRate;

class NetherlandsValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * NetherlandsValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.21;
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
