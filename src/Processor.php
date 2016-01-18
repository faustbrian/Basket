<?php

namespace DraperStudio\Basket;

use DraperStudio\Basket\Contracts\Reconciler;

class Processor
{
    private $reconciler;

    private $metadata;

    public function __construct(Reconciler $reconciler, $metadata = [])
    {
        $this->reconciler = $reconciler;
        $this->metadata = $metadata;
    }

    public function process(Basket $basket)
    {
        $this->discount($basket);

        $meta = $this->meta($basket);
        $products = $this->products($basket);

        return new Order($meta, $products);
    }

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

    public function meta(Basket $basket)
    {
        $meta = [];

        foreach ($this->metadata as $item) {
            $meta[$item->name()] = $item->generate($basket);
        }

        return $meta;
    }

    public function products(Basket $basket)
    {
        $products = [];

        foreach ($basket->products() as $product) {
            $products[] = [
                'sku' => $product->sku,
                'name' => $product->name,
                'price' => $product->price,
                'rate' => $product->rate,
                'quantity' => $product->quantity,
                'freebie' => $product->freebie,
                'taxable' => $product->taxable,
                'delivery' => $product->delivery,
                'coupons' => $product->coupons,
                'tags' => $product->tags,
                'discounts' => $product->discounts,
                'category' => $product->category,
                'total_value' => $this->reconciler->value($product),
                'total_discount' => $this->reconciler->discount($product),
                'total_delivery' => $this->reconciler->delivery($product),
                'total_tax' => $this->reconciler->tax($product),
                'subtotal' => $this->reconciler->subtotal($product),
                'total' => $this->reconciler->total($product),
            ];
        }

        return $products;
    }
}
