<?php

namespace DraperStudio\Basket\Transformers;

use DraperStudio\Basket\Order;

class JSONTransformer extends AbstractTransformer
{
    public function transform(Order $order)
    {
        return json_serialise($this->build($order));
    }
}
