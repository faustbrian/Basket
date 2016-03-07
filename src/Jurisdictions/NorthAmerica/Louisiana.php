<?php

/*
 * This file is part of Basket.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Basket\Jurisdictions\NorthAmerica;

use DraperStudio\Basket\Contracts\Jurisdiction;
use DraperStudio\Basket\TaxRates\NorthAmerica\LouisianaValueAddedTax;
use Money\Currency;

/**
 * Class Louisiana.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
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
