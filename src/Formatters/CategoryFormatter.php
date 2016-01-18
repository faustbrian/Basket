<?php

namespace DraperStudio\Basket\Formatters;

use DraperStudio\Basket\Contracts\Formatter;

class CategoryFormatter implements Formatter
{
    public function format($value)
    {
        $namespace = explode('\\', get_class($value));
        $class = array_pop($namespace);
        $regex = '/(?<!^)((?<![[:upper:]])[[:upper:]]|[[:upper:]](?![[:upper:]]))/';

        return preg_replace($regex, ' $1', $class);
    }
}
