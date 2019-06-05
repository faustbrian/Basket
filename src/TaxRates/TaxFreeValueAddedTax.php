<?php

declare(strict_types=1);

/*
 * This file is part of Basket.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Basket\TaxRates;

use BrianFaust\Basket\Contracts\TaxRate;

class TaxFreeValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * UnitedKingdomValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0;
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
