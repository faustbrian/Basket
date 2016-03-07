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
use DraperStudio\Basket\TaxRates\NorthAmerica\TexasValueAddedTax;
use Money\Currency;

/**
 * Class Texas.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class Texas implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var TexasValueAddedTax
     */
    private $tax;

    /**
     * Texas constructor.
     */
    public function __construct()
    {
        $this->tax = new TexasValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return TexasValueAddedTax
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
