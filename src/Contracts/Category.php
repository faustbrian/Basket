<?php

/*
 * This file is part of Basket.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Basket\Contracts;

use DraperStudio\Basket\Product;

/**
 * Interface Category.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
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
