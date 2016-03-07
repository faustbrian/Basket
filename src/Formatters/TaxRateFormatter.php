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
 * Class TaxRateFormatter.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class TaxRateFormatter implements Formatter
{
    /**
     * @param $value
     *
     * @return string
     */
    public function format($value)
    {
        return $value->percentage().'%';
    }
}
