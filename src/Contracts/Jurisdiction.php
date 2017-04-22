<?php


declare(strict_types=1);

/*
 * This file is part of Basket.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Basket\Contracts;

interface Jurisdiction
{
    /**
     * @return mixed
     */
    public function rate();

    /**
     * @return mixed
     */
    public function currency();
}
