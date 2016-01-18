<?php

namespace DraperStudio\Basket;

class Percent
{
    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function int()
    {
        return $this->value;
    }
}
