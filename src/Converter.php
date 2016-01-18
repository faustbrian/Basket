<?php

namespace DraperStudio\Basket;

use DraperStudio\Basket\Formatters\CategoryFormatter;
use DraperStudio\Basket\Formatters\CollectionFormatter;
use DraperStudio\Basket\Formatters\CouponFormatter;
use DraperStudio\Basket\Formatters\MoneyFormatter;
use DraperStudio\Basket\Formatters\PercentFormatter;
use DraperStudio\Basket\Formatters\TaxRateFormatter;

class Converter
{
    private $formatters;

    public function __construct(array $formatters = [])
    {
        $bootstrap = [
            'Category' => new CategoryFormatter(),
            'Collection' => new CollectionFormatter(),
            'Coupon' => new CouponFormatter(),
            'Money' => new MoneyFormatter(),
            'Percent' => new PercentFormatter(),
            'PercentageDiscount' => new PercentFormatter(),
            'TaxRate' => new TaxRateFormatter(),
            'ValueDiscount' => new MoneyFormatter(),
        ];

        $this->formatters = array_merge($bootstrap, $formatters);
    }

    public function convert($value)
    {
        if (!is_object($value)) {
            return $value;
        }

        if ($value instanceof Collection) {
            return $value->map(function ($item) {
                return $this->formatter($item)->format($item);
            })->toArray();
        }

        return $this->formatter($value)->format($value);
    }

    public function formatter($object)
    {
        $interfaces = class_implements($object);

        foreach ($interfaces as $interface) {
            $class = $this->getClassName($interface);

            if ($object instanceof Collection) {
                if ($object->first() instanceof Coupon) {
                    return $this->formatters['Coupon'];
                }
            }

            if (isset($this->formatters[$class])) {
                return $this->formatters[$class];
            }
        }

        $class = $this->getClassName(get_class($object));

        return $this->formatters[$class];
    }

    private function getClassName($namespace)
    {
        $namespace = explode('\\', $namespace);

        return array_pop($namespace);
    }
}
