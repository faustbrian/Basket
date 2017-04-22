<?php


declare(strict_types=1);



namespace BrianFaust\Basket\Contracts;

interface Money
{
    /**
     * @return mixed
     */
    public function toMoney();
}
