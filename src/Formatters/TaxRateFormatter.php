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

namespace BrianFaust\Basket\Formatters;

use BrianFaust\Basket\Contracts\Formatter;

class TaxRateFormatter implements Formatter
{
    /**
     * @param $value
     *
     * @return string
     */
    public function format($value): string
    {
        return $value->percentage().'%';
    }
}
