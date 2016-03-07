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
use DraperStudio\Basket\TaxRates\NorthAmerica\KentuckyValueAddedTax;
use Money\Currency;

/**
 * Class Kentucky.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class Kentucky implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var KentuckyValueAddedTax
     */
    private $tax;

    /**
     * Kentucky constructor.
     */
    public function __construct()
    {
        $this->tax = new KentuckyValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return KentuckyValueAddedTax
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
