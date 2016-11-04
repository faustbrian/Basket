<?php

namespace BrianFaust\Basket\Formatters;

use BrianFaust\Basket\Contracts\Formatter;

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
