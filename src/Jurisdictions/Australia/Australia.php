<?php

/*
 * This file is part of Basket.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Basket\Jurisdictions\Australia;

use DraperStudio\Basket\Contracts\Jurisdiction;
use DraperStudio\Basket\TaxRates\AustraliaValueAddedTax;
use Money\Currency;

/**
 * Class Australia.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class Australia implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var AustraliaValueAddedTax
     */
    private $tax;

    /**
     * Australia constructor.
     */
    public function __construct()
    {
        $this->tax = new AustraliaValueAddedTax();
        $this->currency = new Currency('AUD');
    }

    /**
     * @return AustraliaValueAddedTax
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
