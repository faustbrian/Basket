<?php

namespace DraperStudio\Basket\MetaData;

use DraperStudio\Basket\Basket;
use DraperStudio\Basket\Contracts\MetaData;

class ProductsMetaData implements MetaData
{
    public function generate(Basket $basket)
    {
        $total = 0;

        foreach ($basket->products() as $product) {
            $total = $total + $product->quantity;
        }

        return $total;
    }

    public function name()
    {
        return 'products_count';
    }
}
