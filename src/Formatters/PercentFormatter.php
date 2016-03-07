<?php

/*
 * This file is part of Basket.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Basket\Formatters;

use DraperStudio\Basket\Contracts\Formatter;
use DraperStudio\Basket\Contracts\Percentage;

/**
 * Class PercentFormatter.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
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
