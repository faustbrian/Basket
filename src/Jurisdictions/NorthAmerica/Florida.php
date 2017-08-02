<?php

/*
 * This file is part of Basket.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Basket\Jurisdictions\NorthAmerica;

use Money\Currency;
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\NorthAmerica\FloridaValueAddedTax;

class Florida implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var FloridaValueAddedTax
     */
    private $tax;

    /**
     * Florida constructor.
     */
    public function __construct()
    {
        $this->tax = new FloridaValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return FloridaValueAddedTax
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
