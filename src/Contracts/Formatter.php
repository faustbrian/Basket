<?php

/*
 * This file is part of Basket.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Basket\Contracts;

/**
 * Interface Formatter.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
interface Formatter
{
    /**
     * @param $value
     *
     * @return mixed
     */
    public function format($value);
}
