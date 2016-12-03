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
use BrianFaust\Basket\TaxRates\Europe\IcelandValueAddedTax;
use Money\Currency;

class Iceland implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var IcelandValueAddedTax
     */
    private $tax;

    /**
     * Iceland constructor.
     */
    public function __construct(): void
    {
        $this->tax = new IcelandValueAddedTax();
        $this->currency = new Currency('ISK');
    }

    /**
     * @return IcelandValueAddedTax
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
