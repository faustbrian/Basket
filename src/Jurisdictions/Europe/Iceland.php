<?php

/*
 * This file is part of Basket.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Basket\Jurisdictions\Europe;

use DraperStudio\Basket\Contracts\Jurisdiction;
use DraperStudio\Basket\TaxRates\Europe\IcelandValueAddedTax;
use Money\Currency;

/**
 * Class Iceland.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
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
    public function __construct()
    {
        $this->tax = new IcelandValueAddedTax();
        $this->currency = new Currency('ISK');
    }

    /**
     * @return IcelandValueAddedTax
     */
    public function rate()
    {
        return $this->tax;
    }

    /**
     * @return Currency
     */
    public function currency()
    {
        return $this->currency;
    }
}
