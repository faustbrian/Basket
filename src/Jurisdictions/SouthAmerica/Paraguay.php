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
use BrianFaust\Basket\TaxRates\SouthAmerica\ParaguayValueAddedTax;
use Money\Currency;

class Paraguay implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var ParaguayValueAddedTax
     */
    private $tax;

    /**
     * Paraguay constructor.
     */
    public function __construct()
    {
        $this->tax = new ParaguayValueAddedTax();
        $this->currency = new Currency('PYG');
    }

    /**
     * @return ParaguayValueAddedTax
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
