<?php

namespace BrianFaust\Basket\Transformers;

use BrianFaust\Basket\Order;

class SerializeTransformer extends AbstractTransformer
{
    /**
     * @param Order $order
     *
     * @return string
     */
    public function transform(Order $order)
    {
        return value_serialise($this->build($order));
    }
}
