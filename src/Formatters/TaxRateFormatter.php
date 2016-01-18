<?php

namespace DraperStudio\Basket\Formatters;

use DraperStudio\Basket\Contracts\Formatter;

class TaxRateFormatter implements Formatter
{
    public function format($value)
    {
        return $value->percentage().'%';
    }
}
