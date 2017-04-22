<?php


declare(strict_types=1);



namespace BrianFaust\Basket\Transformers;

use BrianFaust\Basket\Order;

class ArrayTransformer extends AbstractTransformer
{
    /**
     * @param Order $order
     *
     * @return mixed
     */
    public function transform(Order $order)
    {
        return $this->build($order);
    }
}
