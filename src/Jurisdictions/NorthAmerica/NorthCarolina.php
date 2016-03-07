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
use DraperStudio\Basket\TaxRates\NorthAmerica\NorthCarolinaValueAddedTax;
use Money\Currency;

/**
 * Class NorthCarolina.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class NorthCarolina implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var NorthCarolinaValueAddedTax
     */
    private $tax;

    /**
     * NorthCarolina constructor.
     */
    public function __construct()
    {
        $this->tax = new NorthCarolinaValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return NorthCarolinaValueAddedTax
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
