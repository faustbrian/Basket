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
use DraperStudio\Basket\TaxRates\NorthAmerica\OregonValueAddedTax;
use Money\Currency;

/**
 * Class Oregon.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class Oregon implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var OregonValueAddedTax
     */
    private $tax;

    /**
     * Oregon constructor.
     */
    public function __construct()
    {
        $this->tax = new OregonValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return OregonValueAddedTax
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
