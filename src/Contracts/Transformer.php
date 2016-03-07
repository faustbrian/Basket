<?php

/*
 * This file is part of Basket.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Basket\Contracts;

use DraperStudio\Basket\Order;

/**
 * Interface Transformer.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
interface Transformer
{
    /**
     * @param Order $order
     *
     * @return mixed
     */
    public function transform(Order $order);
}
