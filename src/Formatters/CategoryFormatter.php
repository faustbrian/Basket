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

/**
 * Class CategoryFormatter.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class CategoryFormatter implements Formatter
{
    /**
     * @param $value
     *
     * @return mixed
     */
    public function format($value)
    {
        $namespace = explode('\\', get_class($value));
        $class = array_pop($namespace);
        $regex = '/(?<!^)((?<![[:upper:]])[[:upper:]]|[[:upper:]](?![[:upper:]]))/';

        return preg_replace($regex, ' $1', $class);
    }
}
