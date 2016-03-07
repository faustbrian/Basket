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
use DraperStudio\Basket\TaxRates\Europe\SwitzerlandValueAddedTax;
use Money\Currency;

/**
 * Class Switzerland.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class Switzerland implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var SwitzerlandValueAddedTax
     */
    private $tax;

    /**
     * Switzerland constructor.
     */
    public function __construct()
    {
        $this->tax = new SwitzerlandValueAddedTax();
        $this->currency = new Currency('CHF');
    }

    /**
     * @return SwitzerlandValueAddedTax
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
