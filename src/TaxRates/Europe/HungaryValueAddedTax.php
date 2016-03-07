<?php

/*
 * This file is part of Basket.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Basket\TaxRates\Europe;

use DraperStudio\Basket\Contracts\TaxRate;

/**
 * Class HungaryValueAddedTax.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
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
