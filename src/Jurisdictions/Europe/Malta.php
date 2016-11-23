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
use BrianFaust\Basket\TaxRates\Europe\MaltaValueAddedTax;
use Money\Currency;

class Malta implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var MaltaValueAddedTax
     */
    private $tax;

    /**
     * Malta constructor.
     */
    public function __construct()
    {
        $this->tax = new MaltaValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return MaltaValueAddedTax
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
