<?php

/*
 * This file is part of Basket.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Basket\Jurisdictions\SouthAmerica;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\SouthAmerica\GuyanaValueAddedTax;
use Money\Currency;

class Guyana implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var GuyanaValueAddedTax
     */
    private $tax;

    /**
     * Guyana constructor.
     */
    public function __construct()
    {
        $this->tax = new GuyanaValueAddedTax();
        $this->currency = new Currency('GYD');
    }

    /**
     * @return GuyanaValueAddedTax
     */
    public function rate()
    {
        return $this->tax;
    }

    /**
     * @return Currency
     */
    public function currency()
    {
        return $this->currency;
    }
}
