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

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\NorthAmerica\AlabamaValueAddedTax;
use Money\Currency;

class Alabama implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var AlabamaValueAddedTax
     */
    private $tax;

    /**
     * Alabama constructor.
     */
    public function __construct()
    {
        $this->tax = new AlabamaValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return AlabamaValueAddedTax
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
