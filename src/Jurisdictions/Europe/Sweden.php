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

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\Europe\SwedenValueAddedTax;
use Money\Currency;

class Sweden implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var SwedenValueAddedTax
     */
    private $tax;

    /**
     * Sweden constructor.
     */
    public function __construct()
    {
        $this->tax = new SwedenValueAddedTax();
        $this->currency = new Currency('SEK');
    }

    /**
     * @return SwedenValueAddedTax
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
