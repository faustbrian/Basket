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

use Money\Currency;
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\NorthAmerica\MichiganValueAddedTax;

class Michigan implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var MichiganValueAddedTax
     */
    private $tax;

    /**
     * Michigan constructor.
     */
    public function __construct()
    {
        $this->tax = new MichiganValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return MichiganValueAddedTax
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
