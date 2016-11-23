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
use BrianFaust\Basket\TaxRates\SouthAmerica\EcuadorValueAddedTax;
use Money\Currency;

class Ecuador implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var EcuadorValueAddedTax
     */
    private $tax;

    /**
     * Ecuador constructor.
     */
    public function __construct()
    {
        $this->tax = new EcuadorValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return EcuadorValueAddedTax
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
