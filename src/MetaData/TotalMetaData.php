<?php

namespace DraperStudio\Basket\MetaData;

use DraperStudio\Basket\Basket;
use DraperStudio\Basket\Contracts\MetaData;
use DraperStudio\Basket\Contracts\Reconciler;
use Money\Currency;
use Money\Money;

class TotalMetaData implements MetaData
{
    private $reconciler;

    public function __construct(Reconciler $reconciler)
    {
        $this->reconciler = $reconciler;
    }

    public function generate(Basket $basket)
    {
        $total = new Money(0, $basket->currency());

        foreach ($basket->products() as $product) {
            $total = $total->add($this->reconciler->total($product));
        }

        return $total;
    }

    public function name()
    {
        return 'total';
    }
}
