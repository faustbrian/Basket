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

namespace BrianFaust\Basket\MetaData;

use BrianFaust\Basket\Basket;
use BrianFaust\Basket\Contracts\MetaData;
use BrianFaust\Basket\Contracts\Reconciler;
use Money\Money;

class DeliveryMetaData implements MetaData
{
    /**
     * @var Reconciler
     */
    private $reconciler;

    /**
     * DeliveryMetaData constructor.
     *
     * @param Reconciler $reconciler
     */
    public function __construct(Reconciler $reconciler)
    {
        $this->reconciler = $reconciler;
    }

    /**
     * @param Basket $basket
     *
     * @return Money
     */
    public function generate(Basket $basket)
    {
        $total = new Money(0, $basket->currency());

        foreach ($basket->products() as $product) {
            $total = $total->add($this->reconciler->delivery($product));
        }

        if ($basket->delivery instanceof Money) {
            $total = $total->add($basket->delivery);
        }

        return $total;
    }

    /**
     * @return string
     */
    public function name()
    {
        return 'delivery';
    }
}
