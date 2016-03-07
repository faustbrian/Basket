<?php

/*
 * This file is part of Basket.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Basket\Transformers;

use DraperStudio\Basket\Order;

/**
 * Class ArrayTransformer.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
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
