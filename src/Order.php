<?php

namespace DraperStudio\Basket;

class Order
{
    private $meta;

    private $products;

    public function __construct(array $meta, array $products)
    {
        $this->meta = $meta;
        $this->products = $products;
    }

    public function meta()
    {
        return $this->meta;
    }

    public function products()
    {
        return $this->products;
    }

    public function toArray()
    {
        return array_merge($this->meta, ['products' => $this->products]);
    }
}
