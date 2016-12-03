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

use BrianFaust\Basket\Basket;

interface MetaData
{
    /**
     * @param Basket $basket
     *
     * @return mixed
     */
    public function generate(Basket $basket);

    /**
     * @return mixed
     */
    public function name();
}
