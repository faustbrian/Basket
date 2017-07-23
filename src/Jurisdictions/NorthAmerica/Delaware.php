<?php

/*
 * This file is part of Basket.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Basket\Jurisdictions\NorthAmerica;

use Money\Currency;
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\NorthAmerica\DelawareValueAddedTax;

class Delaware implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var DelawareValueAddedTax
     */
    private $tax;

    /**
     * Delaware constructor.
     */
    public function __construct()
    {
        $this->tax = new DelawareValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return DelawareValueAddedTax
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
