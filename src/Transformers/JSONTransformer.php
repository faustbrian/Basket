<?php

namespace BrianFaust\Basket\Transformers;

use BrianFaust\Basket\Order;

class JSONTransformer extends AbstractTransformer
{
    /**
     * @param Order $order
     *
     * @return mixed
     */
    public function transform(Order $order)
    {
        return json_serialise($this->build($order));
    }
}
