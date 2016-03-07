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
use DraperStudio\Basket\TaxRates\Europe\MontenegroValueAddedTax;
use Money\Currency;

/**
 * Class Montenegro.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class Montenegro implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var MontenegroValueAddedTax
     */
    private $tax;

    /**
     * Montenegro constructor.
     */
    public function __construct()
    {
        $this->tax = new MontenegroValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return MontenegroValueAddedTax
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
