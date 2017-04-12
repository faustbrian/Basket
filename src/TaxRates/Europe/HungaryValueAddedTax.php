<?php



declare(strict_types=1);



namespace BrianFaust\Basket\TaxRates\Europe;

use BrianFaust\Basket\Contracts\TaxRate;

class HungaryValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * HungaryValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.27;
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
