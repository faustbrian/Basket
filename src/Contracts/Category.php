<?php

declare(strict_types=1);

/*
 * This file is part of Basket.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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
