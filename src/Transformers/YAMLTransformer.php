<?php



declare(strict_types=1);



namespace BrianFaust\Basket\Transformers;

use BrianFaust\Basket\Order;

class YAMLTransformer extends AbstractTransformer
{
    /**
     * @param Order $order
     *
     * @return string
     */
    public function transform(Order $order): string
    {
        return yaml_serialise($this->build($order));
    }
}
