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

use Money\Money;
use BrianFaust\Basket\Basket;
use BrianFaust\Basket\Contracts\Discount;
use BrianFaust\Basket\Discounts\ValueDiscount;
use BrianFaust\Basket\Discounts\QuantityDiscount;
use BrianFaust\Basket\Discounts\PercentageDiscount;

trait ApplyDiscount
{
    /**
     * @param Basket   $basket
     * @param Discount $discount
     * @param Money    $total
     *
     * @return Money
     */
    public function calculateTotalDiscount(Basket $basket, Discount $discount, Money $total)
    {
        // Handle a ValueDiscount
        if ($discount instanceof ValueDiscount) {
            $total = $this->subtractValueDiscount($total, $discount);
        }

        // Handle a PercentageDiscount
        if ($discount instanceof PercentageDiscount) {
            $total = $this->subtractPercentageDiscount($total, $discount);
        }

        // Handle a QuantityDiscount
        if ($discount instanceof QuantityDiscount) {
            // Calculate the total quantity of items ordered
            $totalQuantity = 0;

            foreach ($basket->products() as $product) {
                $totalQuantity = $totalQuantity + $product->quantity;
            }

            $quantityDiscount = $discount->rate();

            // Handle a ValueDiscount within a QuantityDiscount
            if ($quantityDiscount instanceof ValueDiscount) {
                $total = $this->subtractValueDiscount($total, $quantityDiscount);
            }

            // Handle a PercentageDiscount within a QuantityDiscount
            if ($quantityDiscount instanceof PercentageDiscount) {
                $total = $this->subtractPercentageDiscount($total, $quantityDiscount);
            }
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
        // Setup 0 value total
        $total = new Money(0, $basket->currency());

        // Calculate the total of all products
        foreach ($basket->products() as $product) {
            $total = $total->add($this->reconciler->total($product));
        }

        // Handle a ValueDiscount
        if ($discount instanceof ValueDiscount) {
            return $discount->rate();
        }

        // Handle a PercentageDiscount
        if ($discount instanceof PercentageDiscount) {
            return $total->multiply($discount->rate()->int() / 100);
        }

        // Handle a QuantityDiscount
        if ($discount instanceof QuantityDiscount) {
            // Calculate the total quantity of items ordered
            $totalQuantity = 0;

            foreach ($basket->products() as $product) {
                $totalQuantity = $totalQuantity + $product->quantity;
            }

            $quantityDiscount = $discount->rate();

            // Handle a ValueDiscount within a QuantityDiscount
            if ($quantityDiscount instanceof ValueDiscount) {
                return $quantityDiscount;
            }

            // Handle a PercentageDiscount within a QuantityDiscount
            if ($quantityDiscount instanceof PercentageDiscount) {
                return $total->multiply($quantityDiscount->int() / 100);
            }
        }

        return $total;
    }

    /**
     * @param Money    $total
     * @param Discount $discount
     *
     * @return Money
     */
    protected function subtractValueDiscount(Money $total, Discount $discount): Money
    {
        return $total->subtract($discount->rate());
    }

    /**
     * @param Money    $total
     * @param Discount $discount
     *
     * @return Money
     */
    protected function subtractPercentageDiscount(Money $total, Discount $discount): Money
    {
        return $total->subtract($total->multiply($discount->rate()->int() / 100));
    }
}
