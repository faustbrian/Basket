<?php

declare(strict_types=1);

/*
 * This file is part of Basket.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Basket;

class Coupon
{
    /**
     * @var
     */
    private $identifier;

    /**
     * @var Collection
     */
    private $discounts;

    /**
     * Coupon constructor.
     *
     * @param $identifier
     */
    public function __construct($identifier)
    {
        $this->identifier = $identifier;
        $this->discounts = new Collection();
    }

    /**
     * @return mixed
     */
    public function identifier()
    {
        return $this->identifier;
    }

    /**
     * @return Collection
     */
    public function discounts()
    {
        return $this->discounts;
    }

    /**
     * @return int
     */
    public function count()
    {
        return $this->discounts->count();
    }

    /**
     * @param $index
     *
     * @return mixed
     */
    public function pick($index)
    {
        return $this->discounts->get($index);
    }

    /**
     * @param $discount
     */
    public function add($discount)
    {
        $this->discounts->push($discount);
    }

    /**
     * @param $index
     */
    public function remove($index)
    {
        $this->discounts->remove($index);
    }

    /**
     * @return string
     */
    public function serialize()
    {
        return serialize($this);
    }
}
