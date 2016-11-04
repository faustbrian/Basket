<?php

namespace BrianFaust\Basket\Reconcilers;

use BrianFaust\Basket\Contracts\Reconciler;
use BrianFaust\Basket\Product;
use Money\Money;

class DefaultReconciler implements Reconciler
{
    /**
     * @param Product $product
     *
     * @return mixed
     */
    public function value(Product $product)
    {
        return $product->price->multiply($product->quantity);
    }

    /**
     * @param Product $product
     *
     * @return Money
     */
    public function discount(Product $product)
    {
        $discountTotal = $this->money($product);

        // "Global" Basket Discount
        foreach ($product->discounts as $discount) {
            $discountTotal = $discountTotal->add(
                $discount->product($product)->multiply($product->quantity)
            );
        }

        // Coupons
        foreach ($product->coupons as $coupon) {
            // Each discount of an coupon
            foreach ($coupon->discounts() as $productDiscount) {
                // Calculate the amount of discount
                $discount = $productDiscount->product($product);
                $discount = $discount->multiply($product->quantity);

                // Add the discount to the discount total
                $discount = new Money($discount->getAmount(), $product->price->getCurrency());
                $discountTotal = $discountTotal->add($discount);
            }
        }

        return $discountTotal;
    }

    /**
     * @param Product $product
     *
     * @return mixed
     */
    public function delivery(Product $product)
    {
        $delivery = $product->delivery->multiply($product->quantity);

        return $delivery;
    }

    /**
     * @param Product $product
     *
     * @return Money
     */
    public function tax(Product $product)
    {
        $tax = $this->money($product);

        if (!$product->taxable || $product->freebie) {
            return $tax;
        }

        $value = $this->value($product);
        $discount = $this->discount($product);

        $value = $value->subtract($discount);
        $tax = $value->multiply($product->rate->float());

        return $tax;
    }

    /**
     * @param Product $product
     *
     * @return Money
     */
    public function subtotal(Product $product)
    {
        $subtotal = $this->money($product);

        if (!$product->freebie) {
            $value = $this->value($product);
            $discount = $this->discount($product);
            $subtotal = $subtotal->add($value)->subtract($discount);
        }

        $delivery = $this->delivery($product);
        $subtotal = $subtotal->add($delivery);

        return $subtotal;
    }

    /**
     * @param Product $product
     *
     * @return mixed
     */
    public function total(Product $product)
    {
        $tax = $this->tax($product);
        $subtotal = $this->subtotal($product);
        $total = $subtotal->add($tax);

        return $total;
    }

    /**
     * @param Product $product
     *
     * @return Money
     */
    private function money(Product $product)
    {
        return new Money(0, $product->price->getCurrency());
    }
}
