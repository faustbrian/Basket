<?php

namespace DraperStudio\Basket\Contracts;

use DraperStudio\Basket\Product;

interface Category
{
    public function categorise(Product $product);

    public function name();
}
