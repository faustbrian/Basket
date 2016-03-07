<?php

/*
 * This file is part of Basket.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Basket;

/**
 * Class Order.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class Order
{
    /**
     * @var array
     */
    private $meta;

    /**
     * @var array
     */
    private $products;

    /**
     * Order constructor.
     *
     * @param array $meta
     * @param array $products
     */
    public function __construct(array $meta, array $products)
    {
        $this->meta = $meta;
        $this->products = $products;
    }

    /**
     * @return array
     */
    public function meta()
    {
        return $this->meta;
    }

    /**
     * @return array
     */
    public function products()
    {
        return $this->products;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return array_merge($this->meta, ['products' => $this->products]);
    }
}
