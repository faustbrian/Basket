<?php

namespace DraperStudio\Basket;

class Coupon
{
    private $identifier;

    private $discounts;

    public function __construct($identifier)
    {
        $this->identifier = $identifier;
        $this->discounts = new Collection();
    }

    public function identifier()
    {
        return $this->identifier;
    }

    public function discounts()
    {
        return $this->discounts;
    }

    public function count()
    {
        return $this->discounts->count();
    }

    public function pick($index)
    {
        return $this->discounts->get($index);
    }

    public function add($discount)
    {
        $this->discounts->push($discount);
    }

    public function remove($index)
    {
        $this->discounts->remove($index);
    }

    public function serialize()
    {
        return serialize($this);
    }
}
