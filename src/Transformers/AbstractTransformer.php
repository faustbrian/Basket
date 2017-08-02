<?php

/*
 * This file is part of Basket.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Basket\Transformers;

use BrianFaust\Basket\Order;
use BrianFaust\Basket\Converter;
use BrianFaust\Basket\Contracts\Transformer;

abstract class AbstractTransformer implements Transformer
{
    /**
     * @var Converter
     */
    private $converter;

    /**
     * AbstractTransformer constructor.
     *
     * @param Converter $converter
     */
    public function __construct(Converter $converter)
    {
        $this->converter = $converter;
    }

    /**
     * @param Order $order
     *
     * @return mixed
     */
    public function build(Order $order)
    {
        foreach ($order->meta() as $key => $total) {
            $payload[$key] = $this->converter->convert($total);
        }

        $payload['products'] = [];

        foreach ($order->products() as $product) {
            $payload['products'][] = array_map(function ($value) {
                return $this->converter->convert($value);
            }, $product);
        }

        return $payload;
    }
}
