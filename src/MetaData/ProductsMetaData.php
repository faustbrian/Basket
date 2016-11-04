<?php

namespace BrianFaust\Basket\MetaData;

use BrianFaust\Basket\Basket;
use BrianFaust\Basket\Contracts\MetaData;

class ProductsMetaData implements MetaData
{
    /**
     * @param Basket $basket
     *
     * @return int
     */
    public function generate(Basket $basket)
    {
        $total = 0;

        foreach ($basket->products() as $product) {
            $total = $total + $product->quantity;
        }

        return $total;
    }

    /**
     * @return string
     */
    public function name()
    {
        return 'products_count';
    }
}
