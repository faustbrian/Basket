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
use DraperStudio\Basket\TaxRates\NorthAmerica\DistrictOfColumbiaValueAddedTax;
use Money\Currency;

/**
 * Class DistrictOfColumbia.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class DistrictOfColumbia implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var DistrictOfColumbiaValueAddedTax
     */
    private $tax;

    /**
     * DistrictOfColumbia constructor.
     */
    public function __construct()
    {
        $this->tax = new DistrictOfColumbiaValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return DistrictOfColumbiaValueAddedTax
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
