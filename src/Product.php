<?php

namespace DraperStudio\Basket;

use Closure;
use DraperStudio\Basket\Contracts\Category;
use DraperStudio\Basket\Contracts\Discount;
use DraperStudio\Basket\Contracts\TaxRate;
use Money\Money;

class Product
{
    private $sku;

    private $name;

    private $price;

    private $rate;

    private $quantity;

    private $freebie;

    private $taxable;

    private $delivery;

    private $coupons;

    private $tags;

    private $discounts;

    private $category;

    public function __construct($sku, $name, Money $price, TaxRate $rate)
    {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->rate = $rate;
        $this->quantity = 1;
        $this->freebie = false;
        $this->taxable = true;
        $this->delivery = new Money(0, $price->getCurrency());
        $this->coupons = new Collection();
        $this->tags = new Collection();
        $this->discounts = new Collection();
    }

    public function quantity($quantity)
    {
        $this->quantity = $quantity;
    }

    public function increment()
    {
        ++$this->quantity;
    }

    public function decrement()
    {
        --$this->quantity;
    }

    public function freebie($status)
    {
        $this->freebie = $status;
    }

    public function taxable($status)
    {
        $this->taxable = $status;
    }

    public function delivery(Money $delivery)
    {
        if ($this->price->isSameCurrency($delivery)) {
            $this->delivery = $delivery;
        }
    }

    public function coupon(Coupon $coupon)
    {
        $this->coupons->push($coupon);
    }

    public function tags($tag)
    {
        $this->tags->push($tag);
    }

    public function discount(Discount $discount)
    {
        $this->discounts->add(0, $discount);
    }

    public function category(Category $category)
    {
        $this->category = $category;

        $this->category->categorise($this);
    }

    public function action(Closure $actions)
    {
        call_user_func($actions, $this);
    }

    public function __get($key)
    {
        if (property_exists($this, $key)) {
            return $this->$key;
        }
    }
}
