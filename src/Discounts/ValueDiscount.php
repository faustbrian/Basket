<?php


declare(strict_types=1);



namespace BrianFaust\Basket\Discounts;

use BrianFaust\Basket\Contracts\Discount;
use BrianFaust\Basket\Contracts\Money as MoneyInterface;
use BrianFaust\Basket\Product;
use Money\Money;

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
    public function product(Product $product): Money
    {
        return $this->rate;
    }

    /**
     * @return Money
     */
    public function rate(): Money
    {
        return $this->rate;
    }

    /**
     * @return Money
     */
    public function toMoney(): Money
    {
        return $this->rate;
    }
}
