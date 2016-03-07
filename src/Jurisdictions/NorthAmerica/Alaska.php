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
use DraperStudio\Basket\TaxRates\NorthAmerica\AlaskaValueAddedTax;
use Money\Currency;

/**
 * Class Alaska.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class Alaska implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var AlaskaValueAddedTax
     */
    private $tax;

    /**
     * Alaska constructor.
     */
    public function __construct()
    {
        $this->tax = new AlaskaValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return AlaskaValueAddedTax
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
