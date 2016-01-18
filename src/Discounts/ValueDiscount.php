<?php

namespace DraperStudio\Basket\Discounts;

use DraperStudio\Basket\Contracts\Discount;
use DraperStudio\Basket\Contracts\Money as MoneyInterface;
use DraperStudio\Basket\Product;
use Money\Money;

class ValueDiscount implements Discount, MoneyInterface
{
    private $rate;

    public function __construct(Money $rate)
    {
        $this->rate = $rate;
    }

    public function product(Product $product)
    {
        return $this->rate;
    }

    public function rate()
    {
        return $this->rate;
    }

    public function toMoney()
    {
        return $this->rate;
    }
}
