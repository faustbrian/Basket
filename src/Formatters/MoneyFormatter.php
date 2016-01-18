<?php

namespace DraperStudio\Basket\Formatters;

use DraperStudio\Basket\Contracts\Formatter;
use DraperStudio\Basket\Money as MoneyInterface;
use Locale;
use Money\Money;
use NumberFormatter;

class MoneyFormatter implements Formatter
{
    private $locale;

    private static $currencies;

    public function __construct($locale = null)
    {
        $this->locale = $locale;

        if (!isset(static::$currencies)) {
            static::$currencies = json_read(__DIR__.'/../../data/currencies.json');
        }
    }

    public function format($value)
    {
        $formatter = new NumberFormatter($this->locale(), NumberFormatter::CURRENCY);

        if ($value instanceof MoneyInterface) {
            $value = $value->toMoney();
        }

        $code = $this->code($value);
        $divisor = $this->divisor($code);
        $amount = $this->convert($value, $divisor);

        return $formatter->formatCurrency($amount, $code);
    }

    private function locale()
    {
        if ($this->locale) {
            return $this->locale;
        }

        return Locale::getDefault();
    }

    private function code(Money $value)
    {
        return $value->getCurrency()->getName();
    }

    private function divisor($code)
    {
        return static::$currencies->$code->subunit_to_unit;
    }

    private function convert(Money $money, $divisor)
    {
        return number_format(($money->getAmount() / $divisor), 2, '.', '');
    }
}
