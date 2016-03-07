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
 * Interface Reconciler.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
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
