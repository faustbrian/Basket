<?php

/*
 * This file is part of Basket.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

/*
 * This file is part of Basket.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Basket\TaxRates\Europe;

use BrianFaust\Basket\Contracts\TaxRate;

class CyprusValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * CyprusValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.19;
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
