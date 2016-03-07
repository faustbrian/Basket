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
use DraperStudio\Basket\TaxRates\Europe\LiechtensteinValueAddedTax;
use Money\Currency;

/**
 * Class Liechtenstein.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class Liechtenstein implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var LiechtensteinValueAddedTax
     */
    private $tax;

    /**
     * Liechtenstein constructor.
     */
    public function __construct()
    {
        $this->tax = new LiechtensteinValueAddedTax();
        $this->currency = new Currency('CHF');
    }

    /**
     * @return LiechtensteinValueAddedTax
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
