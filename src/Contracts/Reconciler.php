<?php

namespace DraperStudio\Basket\Contracts;

use DraperStudio\Basket\Product;

interface Reconciler
{
    public function value(Product $product);

    public function discount(Product $product);

    public function delivery(Product $product);

    public function tax(Product $product);

    public function subtotal(Product $product);

    public function total(Product $product);
}
