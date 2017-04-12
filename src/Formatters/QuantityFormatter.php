<?php



declare(strict_types=1);



namespace BrianFaust\Basket\Formatters;

use BrianFaust\Basket\Contracts\Formatter;
use BrianFaust\Basket\Discounts\PercentageDiscount;
use BrianFaust\Basket\Discounts\ValueDiscount;

class QuantityFormatter implements Formatter
{
    /**
     * @param $value
     *
     * @return string
     */
    public function format($value): string
    {
        $value = $value->rate();

        if ($value instanceof PercentageDiscount) {
            return (new PercentFormatter($value))->format($value);
        }

        if ($value instanceof ValueDiscount) {
            return (new MoneyFormatter())->format($value);
        }
    }
}
