<?php

/*
 * This file is part of Basket.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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
