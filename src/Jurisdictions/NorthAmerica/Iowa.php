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
use DraperStudio\Basket\TaxRates\NorthAmerica\IowaValueAddedTax;
use Money\Currency;

/**
 * Class Iowa.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class Iowa implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var IowaValueAddedTax
     */
    private $tax;

    /**
     * Iowa constructor.
     */
    public function __construct()
    {
        $this->tax = new IowaValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return IowaValueAddedTax
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
