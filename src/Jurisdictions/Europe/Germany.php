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
use DraperStudio\Basket\TaxRates\Europe\GermanyValueAddedTax;
use Money\Currency;

/**
 * Class Germany.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class Germany implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var GermanyValueAddedTax
     */
    private $tax;

    /**
     * Germany constructor.
     */
    public function __construct()
    {
        $this->tax = new GermanyValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return GermanyValueAddedTax
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
