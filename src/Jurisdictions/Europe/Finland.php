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

namespace BrianFaust\Basket\Jurisdictions\Europe;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\TaxRates\Europe\FinlandValueAddedTax;
use Money\Currency;

class Finland implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var FinlandValueAddedTax
     */
    private $tax;

    /**
     * Finland constructor.
     */
    public function __construct()
    {
        $this->tax = new FinlandValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return FinlandValueAddedTax
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
