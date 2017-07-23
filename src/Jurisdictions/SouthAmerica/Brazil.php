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

use Money\Currency;
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\SouthAmerica\BrazilValueAddedTax;

class Brazil implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var BrazilValueAddedTax
     */
    private $tax;

    /**
     * Brazil constructor.
     */
    public function __construct()
    {
        $this->tax = new BrazilValueAddedTax();
        $this->currency = new Currency('BRL');
    }

    /**
     * @return BrazilValueAddedTax
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
