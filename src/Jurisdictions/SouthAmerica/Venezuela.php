<?php

declare(strict_types=1);

/*
 * This file is part of Basket.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Basket\Jurisdictions\SouthAmerica;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\TaxRates\SouthAmerica\VenezuelaValueAddedTax;
use Money\Currency;

class Venezuela implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var VenezuelaValueAddedTax
     */
    private $tax;

    /**
     * Venezuela constructor.
     */
    public function __construct()
    {
        $this->tax = new VenezuelaValueAddedTax();
        $this->currency = new Currency('VEF');
    }

    /**
     * @return VenezuelaValueAddedTax
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
