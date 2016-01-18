<?php

namespace DraperStudio\Basket;

use Closure;
use DraperStudio\Basket\Contracts\Discount;
use DraperStudio\Basket\Contracts\Jurisdiction;

class Basket
{
    private $rate;

    private $currency;

    private $products;

    private $discount;

    public function __construct(Jurisdiction $jurisdiction)
    {
        $this->rate = $jurisdiction->rate();
        $this->currency = $jurisdiction->currency();
        $this->products = new Collection();
    }

    public function rate()
    {
        return $this->rate;
    }

    public function currency()
    {
        return $this->currency;
    }

    public function products()
    {
        return $this->products;
    }

    public function count()
    {
        return $this->products->count();
    }

    public function pick($sku)
    {
        return $this->products->get($sku);
    }

    public function add(Product $product)
    {
        $this->products->add($product->sku, $product);
    }

    public function update($sku, Closure $action)
    {
        $product = $this->pick($sku);

        $product->action($action);
    }

    public function remove($sku)
    {
        $product = $this->pick($sku);

        $this->products->remove($sku);
    }

    public function discount(Discount $discount)
    {
        $this->discount = $discount;
    }

    public function __get($key)
    {
        if (property_exists($this, $key)) {
            return $this->$key;
        }
    }
}
