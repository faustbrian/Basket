# Basket

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

This package is based on [Basket](https://github.com/philipbrown/basket) by [philipbrown](https://github.com/philipbrown).

## Install

Via Composer

``` bash
$ composer require draperstudio/basket
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

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email hello@draperstudio.tech instead of using the issue tracker.

## Credits

- [DraperStudio][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/DraperStudio/basket.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/DraperStudio/Basket/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/DraperStudio/basket.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/DraperStudio/basket.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/DraperStudio/basket.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/DraperStudio/basket
[link-travis]: https://travis-ci.org/DraperStudio/Basket
[link-scrutinizer]: https://scrutinizer-ci.com/g/DraperStudio/basket/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/DraperStudio/basket
[link-downloads]: https://packagist.org/packages/DraperStudio/basket
[link-author]: https://github.com/DraperStudio
[link-contributors]: ../../contributors

<!-- ## To-Do / Ideas

- [x] Laravel Integration **(Session and Database, most likely a separate package)**
- [x] Add more Discounts
- [ ] Add more Categories
- [x] Add more Jurisdictions
- [x] Add more Tax Rates
- [x] Add more Transformers **(XML, YAML)**
- [ ] Recursive Transformation of Collection children **(Coupons, Discounts)** -->
