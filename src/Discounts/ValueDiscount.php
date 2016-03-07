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
use DraperStudio\Basket\Contracts\Money as MoneyInterface;
use DraperStudio\Basket\Product;
use Money\Money;

/**
 * Class ValueDiscount.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class ValueDiscount implements Discount, MoneyInterface
{
    /**
     * @var Money
     */
    private $rate;

    /**
     * ValueDiscount constructor.
     *
     * @param Money $rate
     */
    public function __construct(Money $rate)
    {
        $this->rate = $rate;
    }

    /**
     * @param Product $product
     *
     * @return Money
     */
    public function product(Product $product)
    {
        return $this->rate;
    }

    /**
     * @return Money
     */
    public function rate()
    {
        return $this->rate;
    }

    /**
     * @return Money
     */
    public function toMoney()
    {
        return $this->rate;
    }
}
