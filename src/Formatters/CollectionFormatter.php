<?php

namespace BrianFaust\Basket\Formatters;

use BrianFaust\Basket\Contracts\Formatter;

class CollectionFormatter implements Formatter
{
    /**
     * @param $value
     *
     * @return mixed
     */
    public function format($value)
    {
        return $value->toArray();
    }
}
