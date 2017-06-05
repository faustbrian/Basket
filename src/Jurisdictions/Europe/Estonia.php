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
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\TaxRates\Europe\EstoniaValueAddedTax;
use Money\Currency;

class Estonia implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var EstoniaValueAddedTax
     */
    private $tax;

    /**
     * Estonia constructor.
     */
    public function __construct()
    {
        $this->tax = new EstoniaValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return EstoniaValueAddedTax
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
