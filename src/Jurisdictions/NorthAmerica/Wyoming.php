<?php

/*
 * This file is part of Basket.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Basket\Jurisdictions\NorthAmerica;

use Money\Currency;
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\NorthAmerica\WyomingValueAddedTax;

class Wyoming implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var WyomingValueAddedTax
     */
    private $tax;

    /**
     * Wyoming constructor.
     */
    public function __construct()
    {
        $this->tax = new WyomingValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return WyomingValueAddedTax
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
