<?php

namespace DraperStudio\Basket\Transformers;

use DraperStudio\Basket\Order;

class XMLTransformer extends AbstractTransformer
{
    public function transform(Order $order)
    {
        return xml_serialise($this->build($order));
    }
}
