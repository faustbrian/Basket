<?php


declare(strict_types=1);



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
    public function format($value): string
    {
        if ($value instanceof Percentage) {
            $value = $value->toPercent();
        }

        return $value->int().'%';
    }
}
