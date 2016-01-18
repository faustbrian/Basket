<?php

namespace DraperStudio\Basket\Contracts;

use DraperStudio\Basket\Order;

interface Transformer
{
    public function transform(Order $order);
}
