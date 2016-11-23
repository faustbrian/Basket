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

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\NorthAmerica\SouthDakotaValueAddedTax;
use Money\Currency;

class SouthDakota implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var SouthDakotaValueAddedTax
     */
    private $tax;

    /**
     * SouthDakota constructor.
     */
    public function __construct()
    {
        $this->tax = new SouthDakotaValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return SouthDakotaValueAddedTax
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
