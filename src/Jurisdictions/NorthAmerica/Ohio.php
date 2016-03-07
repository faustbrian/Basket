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
use DraperStudio\Basket\TaxRates\NorthAmerica\OhioValueAddedTax;
use Money\Currency;

/**
 * Class Ohio.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class Ohio implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var OhioValueAddedTax
     */
    private $tax;

    /**
     * Ohio constructor.
     */
    public function __construct()
    {
        $this->tax = new OhioValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return OhioValueAddedTax
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
