<?php

/*
 * This file is part of Basket.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Basket\Contracts;

interface TaxRate
{
    /**
     * @return mixed
     */
    public function float();

    /**
     * @return mixed
     */
    public function percentage();
}
