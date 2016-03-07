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
use DraperStudio\Basket\TaxRates\NorthAmerica\WisconsinValueAddedTax;
use Money\Currency;

/**
 * Class Wisconsin.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class Wisconsin implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var WisconsinValueAddedTax
     */
    private $tax;

    /**
     * Wisconsin constructor.
     */
    public function __construct()
    {
        $this->tax = new WisconsinValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return WisconsinValueAddedTax
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
