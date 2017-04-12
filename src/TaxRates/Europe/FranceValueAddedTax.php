<?php



declare(strict_types=1);



namespace BrianFaust\Basket\TaxRates\Europe;

use BrianFaust\Basket\Contracts\TaxRate;

class FranceValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * FranceValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.20;
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
