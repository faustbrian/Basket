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
use DraperStudio\Basket\TaxRates\Europe\GreeceValueAddedTax;
use Money\Currency;

/**
 * Class Greece.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class Greece implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var GreeceValueAddedTax
     */
    private $tax;

    /**
     * Greece constructor.
     */
    public function __construct()
    {
        $this->tax = new GreeceValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return GreeceValueAddedTax
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
