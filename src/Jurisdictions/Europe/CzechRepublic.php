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
use DraperStudio\Basket\TaxRates\Europe\CzechRepublicValueAddedTax;
use Money\Currency;

/**
 * Class CzechRepublic.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class CzechRepublic implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var CzechRepublicValueAddedTax
     */
    private $tax;

    /**
     * CzechRepublic constructor.
     */
    public function __construct()
    {
        $this->tax = new CzechRepublicValueAddedTax();
        $this->currency = new Currency('CZK');
    }

    /**
     * @return CzechRepublicValueAddedTax
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
