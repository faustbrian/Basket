<?php


declare(strict_types=1);



namespace BrianFaust\Basket\MetaData;

use BrianFaust\Basket\Basket;
use BrianFaust\Basket\Contracts\MetaData;
use BrianFaust\Basket\Contracts\Reconciler;
use Money\Money;

class SubtotalMetaData implements MetaData
{
    /**
     * @var Reconciler
     */
    private $reconciler;

    /**
     * SubtotalMetaData constructor.
     *
     * @param Reconciler $reconciler
     */
    public function __construct(Reconciler $reconciler)
    {
        $this->reconciler = $reconciler;
    }

    /**
     * @param Basket $basket
     *
     * @return Money
     */
    public function generate(Basket $basket)
    {
        $total = new Money(0, $basket->currency());

        foreach ($basket->products() as $product) {
            $total = $total->add($this->reconciler->subtotal($product));
        }

        return $total;
    }

    /**
     * @return string
     */
    public function name()
    {
        return 'subtotal';
    }
}
