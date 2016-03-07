<?php

/*
 * This file is part of Basket.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Basket\TaxRates\NorthAmerica;

use DraperStudio\Basket\Contracts\TaxRate;

/**
 * Class UtahValueAddedTax.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class UtahValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * UtahValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.0595;
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
