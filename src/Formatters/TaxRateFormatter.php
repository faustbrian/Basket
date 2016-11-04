<?php

namespace BrianFaust\Basket\Formatters;

use BrianFaust\Basket\Contracts\Formatter;

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
