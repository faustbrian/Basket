<?php

/*
 * This file is part of Basket.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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
    public function float()
    {
        return $this->rate;
    }

    /**
     * @return int
     */
    public function percentage()
    {
        return intval($this->rate * 100);
    }
}
