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
use DraperStudio\Basket\TaxRates\NorthAmerica\MaineValueAddedTax;
use Money\Currency;

/**
 * Class Maine.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class Maine implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var MaineValueAddedTax
     */
    private $tax;

    /**
     * Maine constructor.
     */
    public function __construct()
    {
        $this->tax = new MaineValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return MaineValueAddedTax
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
