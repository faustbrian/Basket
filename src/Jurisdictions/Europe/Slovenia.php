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
use DraperStudio\Basket\TaxRates\Europe\SloveniaValueAddedTax;
use Money\Currency;

/**
 * Class Slovenia.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class Slovenia implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var SloveniaValueAddedTax
     */
    private $tax;

    /**
     * Slovenia constructor.
     */
    public function __construct()
    {
        $this->tax = new SloveniaValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return SloveniaValueAddedTax
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
