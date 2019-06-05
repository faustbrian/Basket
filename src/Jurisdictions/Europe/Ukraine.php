<?php

declare(strict_types=1);

/*
 * This file is part of Basket.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Basket\Jurisdictions\Europe;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\TaxRates\Europe\UkraineValueAddedTax;
use Money\Currency;

class Ukraine implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var UkraineValueAddedTax
     */
    private $tax;

    /**
     * Ukraine constructor.
     */
    public function __construct()
    {
        $this->tax = new UkraineValueAddedTax();
        $this->currency = new Currency('UAH');
    }

    /**
     * @return UkraineValueAddedTax
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
