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
use DraperStudio\Basket\TaxRates\NorthAmerica\AlabamaValueAddedTax;
use Money\Currency;

/**
 * Class Alabama.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class Alabama implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var AlabamaValueAddedTax
     */
    private $tax;

    /**
     * Alabama constructor.
     */
    public function __construct()
    {
        $this->tax = new AlabamaValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return AlabamaValueAddedTax
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
