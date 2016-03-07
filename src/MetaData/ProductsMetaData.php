<?php

/*
 * This file is part of Basket.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Basket\MetaData;

use DraperStudio\Basket\Basket;
use DraperStudio\Basket\Contracts\MetaData;

/**
 * Class ProductsMetaData.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
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
