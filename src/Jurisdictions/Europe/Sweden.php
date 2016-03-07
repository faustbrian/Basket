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
use DraperStudio\Basket\TaxRates\Europe\SwedenValueAddedTax;
use Money\Currency;

/**
 * Class Sweden.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class Sweden implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var SwedenValueAddedTax
     */
    private $tax;

    /**
     * Sweden constructor.
     */
    public function __construct()
    {
        $this->tax = new SwedenValueAddedTax();
        $this->currency = new Currency('SEK');
    }

    /**
     * @return SwedenValueAddedTax
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
