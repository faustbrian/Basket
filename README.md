# Basket

I would appreciate you taking the time to look at my [Patreon](https://www.patreon.com/faustbrian) and considering to support me if I'm saving you some time with my work.

This package is based on [Basket](https://github.com/philipbrown/basket) by [philipbrown](https://github.com/philipbrown).

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require faustbrian/basket
```

## Coupons

**Important:** Coupons are applied **AFTER** Discounts! This means if you have applied a Discount and a Coupon the Coupon will be applied to the discounted price.

## Usage

For usage instructions check the [USAGE.md](USAGE.md).

#### Create a coupon
``` php
$coupon = new Coupon('COUPON_NAME');
$coupon->add(new PercentageDiscount(20));
$coupon->add(new ValueDiscount(new Money(500, new Currency('GBP'))));
```

#### Apply a coupon
``` php
$basket->products()->first()->coupon($coupon);
```

#### Serialize a coupon - ***Could be used when the coupon needs to be stored.***
``` php
$coupon->serialize();
```

## Quantity Discount

#### Grant 20% discount on each Product if more than 5 are purchased

``` php
$quantityDiscount = new PercentageDiscount(20);
$coupon->add(new QuantityDiscount(5, $quantityDiscount));
```

#### Grant 5£ discount on each Product if more than 5 are purchased

``` php
$quantityDiscount = new ValueDiscount(new Money(500, new Currency('GBP')));
$coupon->add(new QuantityDiscount(5, $quantityDiscount));
```

<!-- ## To-Do / Ideas

- [x] Laravel Integration **(Session and Database, most likely a separate package)**
- [x] Add more Discounts
- [ ] Add more Categories
- [x] Add more Jurisdictions
- [x] Add more Tax Rates
- [x] Add more Transformers **(XML, YAML)**
- [ ] Recursive Transformation of Collection children **(Coupons, Discounts)** -->

## Testing

``` bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to Brian Faust at hello@brianfaust.de. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.de)
