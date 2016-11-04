<?php

namespace BrianFaust\Basket\Contracts;

use BrianFaust\Basket\Product;

interface Discount
{
    /**
     * @param Product $product
     *
     * @return mixed
     */
    public function product(Product $product);

    /**
     * @return mixed
     */
    public function rate();
}
