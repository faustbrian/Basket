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
use BrianFaust\Basket\TaxRates\NorthAmerica\TennesseeValueAddedTax;
use Money\Currency;

class Tennessee implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var TennesseeValueAddedTax
     */
    private $tax;

    /**
     * Tennessee constructor.
     */
    public function __construct()
    {
        $this->tax = new TennesseeValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return TennesseeValueAddedTax
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
