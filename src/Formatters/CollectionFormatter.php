<?php

namespace DraperStudio\Basket\Formatters;

use DraperStudio\Basket\Contracts\Formatter;

class CollectionFormatter implements Formatter
{
    public function format($value)
    {
        return $value->toArray();
    }
}
