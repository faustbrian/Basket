<?php

/*
 * This file is part of Basket.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Basket\Formatters;

use BrianFaust\Basket\Contracts\Formatter;
use BrianFaust\Basket\Contracts\Percentage;

class PercentFormatter implements Formatter
{
    /**
     * @param $value
     *
     * @return string
     */
    public function format($value)
    {
        if ($value instanceof Percentage) {
            $value = $value->toPercent();
        }

        return $value->int().'%';
    }
}
