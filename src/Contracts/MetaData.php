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

use DraperStudio\Basket\Basket;

/**
 * Interface MetaData.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
interface MetaData
{
    /**
     * @param Basket $basket
     *
     * @return mixed
     */
    public function generate(Basket $basket);

    /**
     * @return mixed
     */
    public function name();
}
