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
use DraperStudio\Basket\TaxRates\Europe\PolandValueAddedTax;
use Money\Currency;

/**
 * Class Poland.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class Poland implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var PolandValueAddedTax
     */
    private $tax;

    /**
     * Poland constructor.
     */
    public function __construct()
    {
        $this->tax = new PolandValueAddedTax();
        $this->currency = new Currency('PLN');
    }

    /**
     * @return PolandValueAddedTax
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
