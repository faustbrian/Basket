<?php

namespace DraperStudio\Basket\Contracts;

interface TaxRate
{
    public function float();

    public function percentage();
}
