<?php

namespace DraperStudio\Basket\Formatters;

use DraperStudio\Basket\Contracts\Formatter;

class CouponFormatter implements Formatter
{
    public function format($value)
    {
        $coupons = [];

        foreach ($value as $coupon) {
            $coupons[] = $coupon->identifier();
        }

        return $coupons;
    }
}
