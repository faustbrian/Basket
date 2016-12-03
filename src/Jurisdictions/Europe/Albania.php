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

/*
 * This file is part of Basket.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Basket\Jurisdictions\Europe;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\TaxRates\Europe\AlbaniaValueAddedTax;
use Money\Currency;

class Albania implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var AlbaniaValueAddedTax
     */
    private $tax;

    /**
     * Albania constructor.
     */
    public function __construct(): void
    {
        $this->tax = new AlbaniaValueAddedTax();
        $this->currency = new Currency('ALL');
    }

    /**
     * @return AlbaniaValueAddedTax
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
