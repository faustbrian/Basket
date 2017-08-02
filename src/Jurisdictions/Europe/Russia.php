<?php

/*
 * This file is part of Basket.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Basket\Jurisdictions\Europe;

use Money\Currency;
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\Europe\RussiaValueAddedTax;

class Russia implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var RussiaValueAddedTax
     */
    private $tax;

    /**
     * Russia constructor.
     */
    public function __construct()
    {
        $this->tax = new RussiaValueAddedTax();
        $this->currency = new Currency('RUB');
    }

    /**
     * @return RussiaValueAddedTax
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
