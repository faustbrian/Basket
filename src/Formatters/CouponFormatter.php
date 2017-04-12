<?php



declare(strict_types=1);



namespace BrianFaust\Basket\Formatters;

use BrianFaust\Basket\Contracts\Formatter;

class CouponFormatter implements Formatter
{
    /**
     * @param $value
     *
     * @return array
     */
    public function format($value): array
    {
        $coupons = [];

        foreach ($value as $coupon) {
            $coupons[] = $coupon->identifier();
        }

        return $coupons;
    }
}
