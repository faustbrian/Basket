<?php


declare(strict_types=1);



namespace BrianFaust\Basket\TaxRates\Australia;

use BrianFaust\Basket\Contracts\TaxRate;

class AustraliaValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * AustraliaValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.10;
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
