<?php

namespace DraperStudio\Basket\Formatters;

use DraperStudio\Basket\Contracts\Formatter;
use DraperStudio\Basket\Contracts\Percentage;

class PercentFormatter implements Formatter
{
    public function format($value)
    {
        if ($value instanceof Percentage) {
            $value = $value->toPercent();
        }

        return $value->int().'%';
    }
}
