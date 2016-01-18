<?php

namespace DraperStudio\Basket\Contracts;

use DraperStudio\Basket\Product;

interface Discount
{
    public function product(Product $product);

    public function rate();
}
