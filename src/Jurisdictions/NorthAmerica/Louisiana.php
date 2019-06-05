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

namespace BrianFaust\Basket\Jurisdictions\NorthAmerica;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\TaxRates\NorthAmerica\LouisianaValueAddedTax;
use Money\Currency;

class Louisiana implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var LouisianaValueAddedTax
     */
    private $tax;

    /**
     * Louisiana constructor.
     */
    public function __construct()
    {
        $this->tax = new LouisianaValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return LouisianaValueAddedTax
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
