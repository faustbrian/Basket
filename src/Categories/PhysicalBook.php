<?php

namespace DraperStudio\Basket\Categories;

use DraperStudio\Basket\Contracts\Category;
use DraperStudio\Basket\Product;

class PhysicalBook implements Category
{
    public function categorise(Product $product)
    {
        $product->taxable(false);
    }

    public function name()
    {
        return 'Physical Book';
    }
}
