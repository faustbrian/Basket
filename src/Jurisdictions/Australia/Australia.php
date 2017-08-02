<?php

/*
 * This file is part of Basket.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Basket\Jurisdictions\Australia;

use Money\Currency;
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\AustraliaValueAddedTax;

class Australia implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var AustraliaValueAddedTax
     */
    private $tax;

    /**
     * Australia constructor.
     */
    public function __construct()
    {
        $this->tax = new AustraliaValueAddedTax();
        $this->currency = new Currency('AUD');
    }

    /**
     * @return AustraliaValueAddedTax
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
