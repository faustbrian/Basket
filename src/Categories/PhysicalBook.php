<?php

/*
 * This file is part of Basket.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Basket\Categories;

use DraperStudio\Basket\Contracts\Category;
use DraperStudio\Basket\Product;

/**
 * Class PhysicalBook.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
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
