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
use DraperStudio\Basket\TaxRates\Europe\MacedoniaValueAddedTax;
use Money\Currency;

/**
 * Class Macedonia.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class Macedonia implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var MacedoniaValueAddedTax
     */
    private $tax;

    /**
     * Macedonia constructor.
     */
    public function __construct()
    {
        $this->tax = new MacedoniaValueAddedTax();
        $this->currency = new Currency('MKD');
    }

    /**
     * @return MacedoniaValueAddedTax
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
