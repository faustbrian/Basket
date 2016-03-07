<?php

/*
 * This file is part of Basket.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Basket;

/**
 * Class Percent.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class Percent
{
    /**
     * @var
     */
    private $value;

    /**
     * Percent constructor.
     *
     * @param $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function int()
    {
        return $this->value;
    }
}
