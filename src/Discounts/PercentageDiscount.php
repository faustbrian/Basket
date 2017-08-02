<?php

/*
 * This file is part of Basket.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Basket\Discounts;

use Money\Money;
use BrianFaust\Basket\Percent;
use BrianFaust\Basket\Product;
use BrianFaust\Basket\Contracts\Discount;
use BrianFaust\Basket\Contracts\Percentage;

class PercentageDiscount implements Discount, Percentage
{
    /**
     * @var
     */
    private $rate;

    /**
     * PercentageDiscount constructor.
     *
     * @param $rate
     */
    public function __construct($rate)
    {
        $this->rate = $rate;
    }

    /**
     * @param Product $product
     *
     * @return mixed
     */
    public function product(Product $product): Money
    {
        return $product->price->multiply($this->rate / 100);
    }

    /**
     * @return Percent
     */
    public function rate(): Percent
    {
        return new Percent($this->rate);
    }

    /**
     * @return Percent
     */
    public function toPercent(): Percent
    {
        return new Percent($this->rate);
    }
}
