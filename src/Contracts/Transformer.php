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
