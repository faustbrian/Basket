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
use BrianFaust\Basket\TaxRates\SouthAmerica\BoliviaValueAddedTax;
use Money\Currency;

class Bolivia implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var BoliviaValueAddedTax
     */
    private $tax;

    /**
     * Bolivia constructor.
     */
    public function __construct()
    {
        $this->tax = new BoliviaValueAddedTax();
        $this->currency = new Currency('BOB');
    }

    /**
     * @return BoliviaValueAddedTax
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
