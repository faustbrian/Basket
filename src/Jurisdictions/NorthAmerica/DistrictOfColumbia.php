<?php

declare(strict_types=1);

/*
 * This file is part of Basket.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Basket\Jurisdictions\NorthAmerica;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\TaxRates\NorthAmerica\DistrictOfColumbiaValueAddedTax;
use Money\Currency;

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
    public function rate(): TaxRate
    {
        return $this->tax;
    }

    /**
     * @return Currency
     */
    public function currency(): Currency
    {
        return $this->currency;
    }
}
