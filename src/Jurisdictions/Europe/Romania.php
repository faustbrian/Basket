<?php

/*
 * This file is part of Basket.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Basket\Jurisdictions\Europe;

use DraperStudio\Basket\Contracts\Jurisdiction;
use DraperStudio\Basket\TaxRates\Europe\RomaniaValueAddedTax;
use Money\Currency;

/**
 * Class Romania.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class Romania implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var RomaniaValueAddedTax
     */
    private $tax;

    /**
     * Romania constructor.
     */
    public function __construct()
    {
        $this->tax = new RomaniaValueAddedTax();
        $this->currency = new Currency('RON');
    }

    /**
     * @return RomaniaValueAddedTax
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
