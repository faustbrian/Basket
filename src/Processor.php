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

namespace BrianFaust\Basket;

use BrianFaust\Basket\Contracts\Reconciler;

class Processor
{
    /**
     * @var Reconciler
     */
    private $reconciler;

    /**
     * @var array
     */
    private $metadata;

    /**
     * Processor constructor.
     *
     * @param Reconciler $reconciler
     * @param array      $metadata
     */
    public function __construct(Reconciler $reconciler, $metadata = [])
    {
        $this->reconciler = $reconciler;
        $this->metadata = $metadata;
    }

    /**
     * @param Basket $basket
     *
     * @return Order
     */
    public function process(Basket $basket)
    {
        $this->discount($basket);

        $meta = $this->meta($basket);
        $products = $this->products($basket);

        return new Order($meta, $products);
    }

    /**
     * @param Basket $basket
     */
    public function discount(Basket $basket)
    {
        if ($basket->discount) {
            foreach ($basket->products() as $product) {
                $basket->update($product->sku, function ($product) use ($basket) {
                    $product->discount($basket->discount);
                });
            }
        }
    }

    /**
     * @param Basket $basket
     *
     * @return array
     */
    public function meta(Basket $basket)
    {
        $meta = [];

        foreach ($this->metadata as $item) {
            $meta[$item->name()] = $item->generate($basket);
        }

        return $meta;
    }

    /**
     * @param Basket $basket
     *
     * @return array
     */
    public function products(Basket $basket)
    {
        $products = [];

        foreach ($basket->products() as $product) {
            $products[] = [
                'sku'            => $product->sku,
                'name'           => $product->name,
                'price'          => $product->price,
                'rate'           => $product->rate,
                'quantity'       => $product->quantity,
                'freebie'        => $product->freebie,
                'taxable'        => $product->taxable,
                'delivery'       => $product->delivery,
                'coupons'        => $product->coupons,
                'tags'           => $product->tags,
                'discounts'      => $product->discounts,
                'attributes'     => $product->attributes,
                'category'       => $product->category,
                'total_value'    => $this->reconciler->value($product),
                'total_discount' => $this->reconciler->discount($product),
                'total_delivery' => $this->reconciler->delivery($product),
                'total_tax'      => $this->reconciler->tax($product),
                'subtotal'       => $this->reconciler->subtotal($product),
                'total'          => $this->reconciler->total($product),
            ];
        }

        return $products;
    }
}
