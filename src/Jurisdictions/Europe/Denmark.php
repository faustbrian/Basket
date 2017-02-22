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

namespace BrianFaust\Basket\Jurisdictions\Europe;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\TaxRates\Europe\DenmarkValueAddedTax;
use Money\Currency;

class Denmark implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var DenmarkValueAddedTax
     */
    private $tax;

    /**
     * Denmark constructor.
     */
    public function __construct()
    {
        $this->tax = new DenmarkValueAddedTax();
        $this->currency = new Currency('DKK');
    }

    /**
     * @return DenmarkValueAddedTax
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
