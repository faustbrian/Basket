<?php

/*
 * This file is part of Basket.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Basket\Jurisdictions;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\TaxFreeValueAddedTax;
use Money\Currency;

class TaxFree implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var TaxFreeValueAddedTax
     */
    private $tax;

    /**
     * UnitedKingdom constructor.
     */
    public function __construct()
    {
        $this->tax = new TaxFreeValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return TaxFreeValueAddedTax
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
