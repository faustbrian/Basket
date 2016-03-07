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
use DraperStudio\Basket\TaxRates\Europe\LuxembourgValueAddedTax;
use Money\Currency;

/**
 * Class Luxembourg.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class Luxembourg implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var LuxembourgValueAddedTax
     */
    private $tax;

    /**
     * Luxembourg constructor.
     */
    public function __construct()
    {
        $this->tax = new LuxembourgValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return LuxembourgValueAddedTax
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
