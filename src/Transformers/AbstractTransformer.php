<?php

namespace DraperStudio\Basket\Transformers;

use DraperStudio\Basket\Contracts\Transformer;
use DraperStudio\Basket\Converter;
use DraperStudio\Basket\Order;

abstract class AbstractTransformer implements Transformer
{
    private $converter;

    public function __construct(Converter $converter)
    {
        $this->converter = $converter;
    }

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
