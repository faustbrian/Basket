<?php


declare(strict_types=1);



namespace BrianFaust\Basket\Transformers;

use BrianFaust\Basket\Order;

class JSONTransformer extends AbstractTransformer
{
    /**
     * @param Order $order
     *
     * @return mixed
     */
    public function transform(Order $order): string
    {
        return json_serialise($this->build($order));
    }
}
