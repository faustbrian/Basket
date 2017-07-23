<?php

/*
 * This file is part of Basket.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Basket\Jurisdictions\Europe;

use Money\Currency;
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\Europe\NetherlandsValueAddedTax;

class Netherlands implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var NetherlandsValueAddedTax
     */
    private $tax;

    /**
     * Netherlands constructor.
     */
    public function __construct()
    {
        $this->tax = new NetherlandsValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return NetherlandsValueAddedTax
     */
    public function rate(): TaxRate
    {
        return $this->tax;
    }

    /**
     * @return Currency
     */
    public function currency(): Currency
    {
        return $this->currency;
    }
}
