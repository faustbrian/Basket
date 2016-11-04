<?php

namespace BrianFaust\Basket\Contracts;

use BrianFaust\Basket\Basket;

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
