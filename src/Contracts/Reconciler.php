<?php


declare(strict_types=1);



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
