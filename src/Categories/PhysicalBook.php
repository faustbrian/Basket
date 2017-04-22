<?php


declare(strict_types=1);



namespace BrianFaust\Basket\Categories;

use BrianFaust\Basket\Contracts\Category;
use BrianFaust\Basket\Product;

class PhysicalBook implements Category
{
    /**
     * @param Product $product
     */
    public function categorise(Product $product)
    {
        $product->taxable(false);
    }

    /**
     * @return string
     */
    public function name()
    {
        return 'Physical Book';
    }
}
