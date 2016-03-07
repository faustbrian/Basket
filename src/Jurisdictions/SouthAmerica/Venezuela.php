<?php

/*
 * This file is part of Basket.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Basket\Jurisdictions\SouthAmerica;

use DraperStudio\Basket\Contracts\Jurisdiction;
use DraperStudio\Basket\TaxRates\SouthAmerica\VenezuelaValueAddedTax;
use Money\Currency;

/**
 * Class Venezuela.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class Venezuela implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var VenezuelaValueAddedTax
     */
    private $tax;

    /**
     * Venezuela constructor.
     */
    public function __construct()
    {
        $this->tax = new VenezuelaValueAddedTax();
        $this->currency = new Currency('VEF');
    }

    /**
     * @return VenezuelaValueAddedTax
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
