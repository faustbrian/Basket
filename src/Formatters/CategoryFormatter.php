<?php



declare(strict_types=1);



namespace BrianFaust\Basket\Formatters;

use BrianFaust\Basket\Contracts\Formatter;

class CategoryFormatter implements Formatter
{
    /**
     * @param $value
     *
     * @return mixed
     */
    public function format($value): string
    {
        $namespace = explode('\\', get_class($value));
        $class = array_pop($namespace);
        $regex = '/(?<!^)((?<![[:upper:]])[[:upper:]]|[[:upper:]](?![[:upper:]]))/';

        return preg_replace($regex, ' $1', $class);
    }
}
