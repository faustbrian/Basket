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
use BrianFaust\Basket\TaxRates\NorthAmerica\CaliforniaValueAddedTax;
use Money\Currency;

class California implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var CaliforniaValueAddedTax
     */
    private $tax;

    /**
     * California constructor.
     */
    public function __construct()
    {
        $this->tax = new CaliforniaValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return CaliforniaValueAddedTax
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
