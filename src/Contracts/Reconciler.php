<?php

/*
 * This file is part of Basket.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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

interface Reconciler
{
    /**
     * @param Product $product
     *
     * @return mixed
     */
    public function value(Product $product);

    /**
     * @param Product $product
     *
     * @return mixed
     */
    public function discount(Product $product);

    /**
     * @param Product $product
     *
     * @return mixed
     */
    public function delivery(Product $product);

    /**
     * @param Product $product
     *
     * @return mixed
     */
    public function tax(Product $product);

    /**
     * @param Product $product
     *
     * @return mixed
     */
    public function subtotal(Product $product);

    /**
     * @param Product $product
     *
     * @return mixed
     */
    public function total(Product $product);
}
