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
use DraperStudio\Basket\TaxRates\SouthAmerica\BoliviaValueAddedTax;
use Money\Currency;

/**
 * Class Bolivia.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class Bolivia implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var BoliviaValueAddedTax
     */
    private $tax;

    /**
     * Bolivia constructor.
     */
    public function __construct()
    {
        $this->tax = new BoliviaValueAddedTax();
        $this->currency = new Currency('BOB');
    }

    /**
     * @return BoliviaValueAddedTax
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
