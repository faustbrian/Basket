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
use BrianFaust\Basket\TaxRates\Europe\SwitzerlandValueAddedTax;
use Money\Currency;

class Switzerland implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var SwitzerlandValueAddedTax
     */
    private $tax;

    /**
     * Switzerland constructor.
     */
    public function __construct()
    {
        $this->tax = new SwitzerlandValueAddedTax();
        $this->currency = new Currency('CHF');
    }

    /**
     * @return SwitzerlandValueAddedTax
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
