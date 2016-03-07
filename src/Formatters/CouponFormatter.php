<?php

/*
 * This file is part of Basket.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Basket\Formatters;

use DraperStudio\Basket\Contracts\Formatter;

/**
 * Class CouponFormatter.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class CouponFormatter implements Formatter
{
    /**
     * @param $value
     *
     * @return array
     */
    public function format($value)
    {
        $coupons = [];

        foreach ($value as $coupon) {
            $coupons[] = $coupon->identifier();
        }

        return $coupons;
    }
}
