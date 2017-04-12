<?php



declare(strict_types=1);



namespace BrianFaust\Basket\Contracts;

use BrianFaust\Basket\Order;

interface Transformer
{
    /**
     * @param Order $order
     *
     * @return mixed
     */
    public function transform(Order $order);
}
