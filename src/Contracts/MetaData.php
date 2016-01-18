<?php

namespace DraperStudio\Basket\Contracts;

use DraperStudio\Basket\Basket;

interface MetaData
{
    public function generate(Basket $basket);

    public function name();
}
