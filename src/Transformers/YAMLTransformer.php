<?php

declare(strict_types=1);

/*
 * This file is part of Basket.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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
