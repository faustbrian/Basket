<?php

namespace DraperStudio\Basket\Discounts;

use DraperStudio\Basket\Contracts\Discount;
use DraperStudio\Basket\Product;
use Money\Money;

class QuantityDiscount implements Discount
{
    private $quantity;

    private $rate;

    public function __construct($quantity, Discount $rate)
    {
        $this->quantity = $quantity;
        $this->rate = $rate;
    }

    public function product(Product $product)
    {
        if ($product->quantity >= $this->quantity) {
            return $this->rate->product($product);
        }

        return new Money(0, $product->price->getCurrency());
    }

    public function rate()
    {
        return $this->rate;
    }
}
