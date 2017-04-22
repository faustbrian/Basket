<?php


declare(strict_types=1);



namespace BrianFaust\Basket\Discounts;

use BrianFaust\Basket\Contracts\Discount;
use BrianFaust\Basket\Product;
use Money\Money;

class QuantityDiscount implements Discount
{
    /**
     * @var
     */
    private $quantity;

    /**
     * @var Discount
     */
    private $rate;

    /**
     * QuantityDiscount constructor.
     *
     * @param $quantity
     * @param Discount $rate
     */
    public function __construct($quantity, Discount $rate)
    {
        $this->quantity = $quantity;
        $this->rate = $rate;
    }

    /**
     * @param Product $product
     *
     * @return Money
     */
    public function product(Product $product): Money
    {
        if ($product->quantity >= $this->quantity) {
            return $this->rate->product($product);
        }

        return new Money(0, $product->price->getCurrency());
    }

    /**
     * @return Discount
     */
    public function rate(): Discount
    {
        return $this->rate;
    }
}
