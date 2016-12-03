<?php

/*
 * This file is part of Basket.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace BrianFaust\Basket\Jurisdictions\SouthAmerica;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\TaxRates\SouthAmerica\EcuadorValueAddedTax;
use Money\Currency;

class Ecuador implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var EcuadorValueAddedTax
     */
    private $tax;

    /**
     * Ecuador constructor.
     */
    public function __construct(): void
    {
        $this->tax = new EcuadorValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return EcuadorValueAddedTax
     */
    public function rate() : TaxRate
    {
        return $this->tax;
    }

    /**
     * @return Currency
     */
    public function currency() : Currency
    {
        return $this->currency;
    }
}
