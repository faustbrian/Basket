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
use DraperStudio\Basket\TaxRates\Europe\MaltaValueAddedTax;
use Money\Currency;

/**
 * Class Malta.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class Malta implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var MaltaValueAddedTax
     */
    private $tax;

    /**
     * Malta constructor.
     */
    public function __construct()
    {
        $this->tax = new MaltaValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return MaltaValueAddedTax
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
