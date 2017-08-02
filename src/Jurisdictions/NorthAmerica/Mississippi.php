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
use BrianFaust\Basket\TaxRates\NorthAmerica\MississippiValueAddedTax;

class Mississippi implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var MississippiValueAddedTax
     */
    private $tax;

    /**
     * Mississippi constructor.
     */
    public function __construct()
    {
        $this->tax = new MississippiValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return MississippiValueAddedTax
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
