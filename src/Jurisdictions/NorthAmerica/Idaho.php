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
use BrianFaust\Basket\TaxRates\NorthAmerica\IdahoValueAddedTax;
use Money\Currency;

class Idaho implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var IdahoValueAddedTax
     */
    private $tax;

    /**
     * Idaho constructor.
     */
    public function __construct()
    {
        $this->tax = new IdahoValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return IdahoValueAddedTax
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
