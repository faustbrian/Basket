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
use DraperStudio\Basket\TaxRates\NorthAmerica\IllinoisValueAddedTax;
use Money\Currency;

/**
 * Class Illinois.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class Illinois implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var IllinoisValueAddedTax
     */
    private $tax;

    /**
     * Illinois constructor.
     */
    public function __construct()
    {
        $this->tax = new IllinoisValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return IllinoisValueAddedTax
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
