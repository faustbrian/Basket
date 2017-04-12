<?php



declare(strict_types=1);



namespace BrianFaust\Basket\Contracts;

use BrianFaust\Basket\Product;

interface Category
{
    /**
     * @param Product $product
     *
     * @return mixed
     */
    public function categorise(Product $product);

    /**
     * @return mixed
     */
    public function name();
}
