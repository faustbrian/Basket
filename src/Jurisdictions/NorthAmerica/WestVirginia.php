<?php

/*
 * This file is part of Basket.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Basket\Jurisdictions\NorthAmerica;

use DraperStudio\Basket\Contracts\Jurisdiction;
use DraperStudio\Basket\TaxRates\NorthAmerica\WestVirginiaValueAddedTax;
use Money\Currency;

/**
 * Class WestVirginia.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class WestVirginia implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var WestVirginiaValueAddedTax
     */
    private $tax;

    /**
     * WestVirginia constructor.
     */
    public function __construct()
    {
        $this->tax = new WestVirginiaValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return WestVirginiaValueAddedTax
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
