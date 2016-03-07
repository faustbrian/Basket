<?php

/*
 * This file is part of Basket.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Basket\Discounts;

use DraperStudio\Basket\Contracts\Discount;
use DraperStudio\Basket\Contracts\Percentage;
use DraperStudio\Basket\Percent;
use DraperStudio\Basket\Product;

/**
 * Class PercentageDiscount.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
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
    public function product(Product $product)
    {
        return $product->price->multiply($this->rate / 100);
    }

    /**
     * @return Percent
     */
    public function rate()
    {
        return new Percent($this->rate);
    }

    /**
     * @return Percent
     */
    public function toPercent()
    {
        return new Percent($this->rate);
    }
}
