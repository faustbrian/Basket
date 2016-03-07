<?php

/*
 * This file is part of Basket.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Basket\Jurisdictions\SouthAmerica;

use DraperStudio\Basket\Contracts\Jurisdiction;
use DraperStudio\Basket\TaxRates\SouthAmerica\ColombiaValueAddedTax;
use Money\Currency;

/**
 * Class Colombia.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class Colombia implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var ColombiaValueAddedTax
     */
    private $tax;

    /**
     * Colombia constructor.
     */
    public function __construct()
    {
        $this->tax = new ColombiaValueAddedTax();
        $this->currency = new Currency('COP');
    }

    /**
     * @return ColombiaValueAddedTax
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
