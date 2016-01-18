<?php

namespace DraperStudio\Basket\Transformers;

use DraperStudio\Basket\Order;

class YAMLInlineTransformer extends AbstractTransformer
{
    public function transform(Order $order)
    {
        return yaml_inline_serialise($this->build($order), true);
    }
}
