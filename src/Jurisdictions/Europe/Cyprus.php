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
use DraperStudio\Basket\TaxRates\Europe\CyprusValueAddedTax;
use Money\Currency;

/**
 * Class Cyprus.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class Cyprus implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var CyprusValueAddedTax
     */
    private $tax;

    /**
     * Cyprus constructor.
     */
    public function __construct()
    {
        $this->tax = new CyprusValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return CyprusValueAddedTax
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
