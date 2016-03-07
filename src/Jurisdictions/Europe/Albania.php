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
use DraperStudio\Basket\TaxRates\Europe\AlbaniaValueAddedTax;
use Money\Currency;

/**
 * Class Albania.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class Albania implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var AlbaniaValueAddedTax
     */
    private $tax;

    /**
     * Albania constructor.
     */
    public function __construct()
    {
        $this->tax = new AlbaniaValueAddedTax();
        $this->currency = new Currency('ALL');
    }

    /**
     * @return AlbaniaValueAddedTax
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
