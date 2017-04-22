<?php


declare(strict_types=1);



namespace BrianFaust\Basket\TaxRates\NorthAmerica;

use BrianFaust\Basket\Contracts\TaxRate;

class ColoradoValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * ColoradoValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.029;
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
