<?php

namespace DraperStudio\Basket\Transformers;

use DraperStudio\Basket\Order;

class ArrayTransformer extends AbstractTransformer
{
    public function transform(Order $order)
    {
        return $this->build($order);
    }
}
