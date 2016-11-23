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
use BrianFaust\Basket\TaxRates\SouthAmerica\UruguayValueAddedTax;
use Money\Currency;

class Uruguay implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var UruguayValueAddedTax
     */
    private $tax;

    /**
     * Uruguay constructor.
     */
    public function __construct()
    {
        $this->tax = new UruguayValueAddedTax();
        $this->currency = new Currency('UYU');
    }

    /**
     * @return UruguayValueAddedTax
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
