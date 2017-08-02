<?php

/*
 * This file is part of Basket.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Basket\Jurisdictions\SouthAmerica;

use Money\Currency;
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\SouthAmerica\SurinameValueAddedTax;

class Suriname implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var SurinameValueAddedTax
     */
    private $tax;

    /**
     * Suriname constructor.
     */
    public function __construct()
    {
        $this->tax = new SurinameValueAddedTax();
        $this->currency = new Currency('SRD');
    }

    /**
     * @return SurinameValueAddedTax
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
