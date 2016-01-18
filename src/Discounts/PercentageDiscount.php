<?php

namespace DraperStudio\Basket\Discounts;

use DraperStudio\Basket\Contracts\Discount;
use DraperStudio\Basket\Contracts\Percentage;
use DraperStudio\Basket\Percent;
use DraperStudio\Basket\Product;

class PercentageDiscount implements Discount, Percentage
{
    private $rate;

    public function __construct($rate)
    {
        $this->rate = $rate;
    }

    public function product(Product $product)
    {
        return $product->price->multiply($this->rate / 100);
    }

    public function rate()
    {
        return new Percent($this->rate);
    }

    public function toPercent()
    {
        return new Percent($this->rate);
    }
}
