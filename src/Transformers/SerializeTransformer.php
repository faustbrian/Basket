<?php

namespace DraperStudio\Basket\Transformers;

use DraperStudio\Basket\Order;

class SerializeTransformer extends AbstractTransformer
{
    public function transform(Order $order)
    {
        return value_serialise($this->build($order));
    }
}
