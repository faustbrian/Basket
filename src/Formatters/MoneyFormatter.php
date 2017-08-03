<?php

declare(strict_types=1);

/*
 * This file is part of Basket.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Basket\Formatters;

use Locale;
use Money\Money;
use NumberFormatter;
use BrianFaust\Basket\Contracts\Formatter;
use BrianFaust\Basket\Discounts\ValueDiscount;
use BrianFaust\Basket\Money as MoneyInterface;

class MoneyFormatter implements Formatter
{
    /**
     * @var null
     */
    private $locale;

    /**
     * @var
     */
    private static $currencies;

    /**
     * MoneyFormatter constructor.
     *
     * @param null $locale
     */
    public function __construct($locale = null)
    {
        $this->locale = $locale;

        if (! isset(static::$currencies)) {
            static::$currencies = json_read(__DIR__.'/../../resources/data/currencies.json');
        }
    }

    /**
     * @param $value
     *
     * @return string
     */
    public function format($value): string
    {
        $formatter = new NumberFormatter($this->locale(), NumberFormatter::CURRENCY);

        if ($value instanceof MoneyInterface) {
            $value = $value->toMoney();
        }

        if ($value instanceof ValueDiscount) {
            $value = $value->rate();
        }

        $code = $this->code($value);
        $divisor = $this->divisor($code);
        $amount = $this->convert($value, $divisor);

        return $formatter->formatCurrency($amount, $code);
    }

    /**
     * @return null|string
     */
    private function locale(): string
    {
        if ($this->locale) {
            return $this->locale;
        }

        return Locale::getDefault();
    }

    /**
     * @param Money $value
     *
     * @return mixed
     */
    private function code(Money $value): string
    {
        return $value->getCurrency()->getCode();
    }

    /**
     * @param $code
     *
     * @return mixed
     */
    private function divisor($code): int
    {
        return static::$currencies[$code]->subunit_to_unit;
    }

    /**
     * @param Money $money
     * @param $divisor
     *
     * @return string
     */
    private function convert(Money $money, $divisor): float
    {
        return (float) number_format(($money->getAmount() / $divisor), 2, '.', '');
    }
}
