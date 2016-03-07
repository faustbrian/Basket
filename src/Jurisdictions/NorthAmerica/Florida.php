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
use DraperStudio\Basket\TaxRates\NorthAmerica\FloridaValueAddedTax;
use Money\Currency;

/**
 * Class Florida.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class Florida implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var FloridaValueAddedTax
     */
    private $tax;

    /**
     * Florida constructor.
     */
    public function __construct()
    {
        $this->tax = new FloridaValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return FloridaValueAddedTax
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
