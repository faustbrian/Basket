<?php

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
