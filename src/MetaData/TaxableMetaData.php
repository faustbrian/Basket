<?php

namespace DraperStudio\Basket\MetaData;

use DraperStudio\Basket\Basket;
use DraperStudio\Basket\Contracts\MetaData;

class TaxableMetaData implements MetaData
{
    public function generate(Basket $basket)
    {
        $total = 0;

        foreach ($basket->products() as $product) {
            if ($product->taxable) {
                $total = $total + $product->quantity;
            }
        }

        return $total;
    }

    public function name()
    {
        return 'taxable';
    }
}
