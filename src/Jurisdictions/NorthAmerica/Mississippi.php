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
use DraperStudio\Basket\TaxRates\NorthAmerica\MississippiValueAddedTax;
use Money\Currency;

/**
 * Class Mississippi.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class Mississippi implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var MississippiValueAddedTax
     */
    private $tax;

    /**
     * Mississippi constructor.
     */
    public function __construct()
    {
        $this->tax = new MississippiValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return MississippiValueAddedTax
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
