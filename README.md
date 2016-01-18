# Basket

This package is based on [Basket](https://github.com/philipbrown/basket) by [philipbrown](https://github.com/philipbrown).

## Usage

For usage instructions check the [USAGE.md](USAGE.md).

## New

- Basket Discount
- QuantityDiscount
- Coupons **(Collection of Discount objects with an identifier)**
- Jurisdictions **(108)**
    - [Australia](src/Jurisdictions/Australia) **(1)**
    - [Europe](src/Jurisdictions/Europe) **(42)**
    - [North America](src/Jurisdictions/NorthAmerica) **(53)**
    - [South America](src/Jurisdictions/SouthAmerica) **(12)**
- Tax Rates **(108)**
    - [Australia](src/TaxRates/Australia) **(1)**
    - [Europe](src/TaxRates/Europe) **(42)**
    - [North America](src/TaxRates/NorthAmerica) **(53)**
    - [South America](src/TaxRates/SouthAmerica) **(12)**
- Transformers
    - XMLTransformer
    - YAMLTransformer
    - YAMLInlineTransformer
    - SerializeTransformer

## Coupons

**Important:** Coupons are applied **AFTER** Discounts! This means if you have applied a Discount and a Coupon the Coupon will be applied to the discounted price.

#### Create a coupon
```php
$coupon = new Coupon('COUPON_NAME');
$coupon->add(new PercentageDiscount(20));
$coupon->add(new ValueDiscount(new Money(500, new Currency('GBP'))));
```

#### Apply a coupon
```php
$basket->products()->first()->coupon($coupon);
```

#### Serialize a coupon - ***Could be used when the coupon needs to be stored.***
```php
$coupon->serialize();
```

## Quantity Discount

#### Grant 20% discount on each Product if more than 5 are purchased

```php
$quantityDiscount = new PercentageDiscount(20);
$coupon->add(new QuantityDiscount(5, $quantityDiscount));
```

#### Grant 5£ discount on each Product if more than 5 are purchased

```php
$quantityDiscount = new ValueDiscount(new Money(500, new Currency('GBP')));
$coupon->add(new QuantityDiscount(5, $quantityDiscount));
```

## To-Do / Ideas

- [x] Laravel Integration **(Session and Database, most likely a separate package)**
- [x] Add more Discounts
- [ ] Add more Categories
- [x] Add more Jurisdictions
- [x] Add more Tax Rates
- [x] Add more Transformers **(XML, YAML)**
- [ ] Recursive Transformation of Collection children **(Coupons, Discounts)**
