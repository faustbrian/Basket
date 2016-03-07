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
use DraperStudio\Basket\TaxRates\NorthAmerica\PennsylvaniaValueAddedTax;
use Money\Currency;

/**
 * Class Pennsylvania.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class Pennsylvania implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var PennsylvaniaValueAddedTax
     */
    private $tax;

    /**
     * Pennsylvania constructor.
     */
    public function __construct()
    {
        $this->tax = new PennsylvaniaValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return PennsylvaniaValueAddedTax
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
