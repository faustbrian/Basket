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
use BrianFaust\Basket\TaxRates\Europe\CzechRepublicValueAddedTax;
use Money\Currency;

class CzechRepublic implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var CzechRepublicValueAddedTax
     */
    private $tax;

    /**
     * CzechRepublic constructor.
     */
    public function __construct()
    {
        $this->tax = new CzechRepublicValueAddedTax();
        $this->currency = new Currency('CZK');
    }

    /**
     * @return CzechRepublicValueAddedTax
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
