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

class CategoryFormatter implements Formatter
{
    /**
     * @param $value
     *
     * @return mixed
     */
    public function format($value): string
    {
        $namespace = explode('\\', get_class($value));
        $class = array_pop($namespace);
        $regex = '/(?<!^)((?<![[:upper:]])[[:upper:]]|[[:upper:]](?![[:upper:]]))/';

        return preg_replace($regex, ' $1', $class);
    }
}
