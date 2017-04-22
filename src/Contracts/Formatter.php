<?php


declare(strict_types=1);



namespace BrianFaust\Basket\Contracts;

interface Formatter
{
    /**
     * @param $value
     *
     * @return mixed
     */
    public function format($value);
}
