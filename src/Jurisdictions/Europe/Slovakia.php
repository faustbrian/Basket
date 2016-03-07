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
use DraperStudio\Basket\TaxRates\Europe\SlovakiaValueAddedTax;
use Money\Currency;

/**
 * Class Slovakia.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class Slovakia implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var SlovakiaValueAddedTax
     */
    private $tax;

    /**
     * Slovakia constructor.
     */
    public function __construct()
    {
        $this->tax = new SlovakiaValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return SlovakiaValueAddedTax
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
