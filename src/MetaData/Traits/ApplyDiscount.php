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

namespace BrianFaust\Basket\MetaData\Traits;

use BrianFaust\Basket\Basket;
use BrianFaust\Basket\Contracts\Discount;
use BrianFaust\Basket\Discounts\PercentageDiscount;
use BrianFaust\Basket\Discounts\ValueDiscount;
use Money\Money;

trait ApplyDiscount
{
    /**
     * @param Discount $discount
     * @param Money    $total
     *
     * @return Money
     */
    public function calculateTotalDiscount(Discount $discount, Money $total)
    {
        if ($discount instanceof ValueDiscount) {
            $total = $total->subtract($discount->rate());
        }

        if ($discount instanceof PercentageDiscount) {
            $total = $total->subtract($total->multiply($discount->rate()->int() / 100));
        }

        return $total;
    }

    /**
     * @param Basket $basket
     * @param Basket $discount
     *
     * @return Money
     */
    public function calculateTotalWithDiscount(Basket $basket, Discount $discount)
    {
        $total = new Money(0, $basket->currency());

        foreach ($basket->products() as $product) {
            $total = $total->add($this->reconciler->total($product));
        }

        if ($discount instanceof ValueDiscount) {
            return $discount->rate();
        }

        if ($discount instanceof PercentageDiscount) {
            return $total->multiply($discount->rate()->int() / 100);
        }

        return $total;
    }
}
