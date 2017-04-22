<?php


declare(strict_types=1);



namespace BrianFaust\Basket;

use Money\Money;

class Order
{
    /**
     * @var array
     */
    private $meta;

    /**
     * @var array
     */
    private $products;

    /**
     * @var Money\Money
     */
    private $delivery;

    /**
     * Order constructor.
     *
     * @param array       $meta
     * @param array       $products
     * @param Money\Money $delivery
     */
    public function __construct(array $meta, array $products, ?Money $delivery)
    {
        $this->meta = $meta;
        $this->products = $products;
        $this->delivery = $delivery;
    }

    /**
     * @return array
     */
    public function meta()
    {
        return $this->meta;
    }

    /**
     * @return array
     */
    public function products()
    {
        return $this->products;
    }

    /**
     * @return Money\Money
     */
    public function delivery()
    {
        return $this->delivery;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return array_merge($this->meta, ['products' => $this->products]);
    }
}
