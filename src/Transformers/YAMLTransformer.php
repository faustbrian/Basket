<?php

namespace DraperStudio\Basket\Transformers;

use DraperStudio\Basket\Order;

class YAMLTransformer extends AbstractTransformer
{
    public function transform(Order $order)
    {
        return yaml_serialise($this->build($order));
    }
}
