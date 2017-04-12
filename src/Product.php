<?php



declare(strict_types=1);



namespace BrianFaust\Basket;

use BrianFaust\Basket\Contracts\Category;
use BrianFaust\Basket\Contracts\Discount;
use BrianFaust\Basket\Contracts\TaxRate;
use Closure;
use Money\Money;

class Product
{
    /**
     * @var
     */
    private $sku;

    /**
     * @var
     */
    private $name;

    /**
     * @var Money
     */
    private $price;

    /**
     * @var TaxRate
     */
    private $rate;

    /**
     * @var int
     */
    private $quantity;

    /**
     * @var bool
     */
    private $freebie;

    /**
     * @var bool
     */
    private $taxable;

    /**
     * @var Money
     */
    private $delivery;

    /**
     * @var Collection
     */
    private $coupons;

    /**
     * @var Collection
     */
    private $tags;

    /**
     * @var Collection
     */
    private $discounts;

    /**
     * @var string
     */
    private $category;

    /**
     * @var Collection
     */
    private $attributes;

    /**
     * Product constructor.
     *
     * @param $sku
     * @param $name
     * @param Money   $price
     * @param TaxRate $rate
     */
    public function __construct($sku, $name, Money $price, TaxRate $rate)
    {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->rate = $rate;
        $this->quantity = 1;
        $this->freebie = false;
        $this->taxable = true;
        $this->delivery = new Money(0, $price->getCurrency());
        $this->coupons = new Collection();
        $this->tags = new Collection();
        $this->discounts = new Collection();
        $this->attributes = new Collection();
    }

    /**
     * @param $quantity
     */
    public function quantity($quantity)
    {
        $this->quantity = $quantity;
    }

    public function increment()
    {
        ++$this->quantity;
    }

    public function decrement()
    {
        --$this->quantity;
    }

    /**
     * @param $status
     */
    public function freebie($status)
    {
        $this->freebie = $status;
    }

    /**
     * @param $status
     */
    public function taxable($status)
    {
        $this->taxable = $status;
    }

    /**
     * Set the tax rate.
     *
     * @param int $rate
     *
     * @return void
     */
    public function rate($rate)
    {
        $this->rate = $rate;
    }

    /**
     * @param Money $delivery
     */
    public function delivery(Money $delivery)
    {
        if ($this->price->isSameCurrency($delivery)) {
            $this->delivery = $delivery;
        }
    }

    /**
     * @param Coupon $coupon
     */
    public function coupon(Coupon $coupon)
    {
        $this->coupons->push($coupon);
    }

    /**
     * @param $tag
     */
    public function tags($tag)
    {
        $this->tags->push($tag);
    }

    /**
     * @param Discount $discount
     */
    public function discount(Discount $discount)
    {
        $this->discounts->add(0, $discount);
    }

    /**
     * Add an attribute.
     *
     * @param string $key
     * @param mixed  $value
     *
     * @return void
     */
    public function attributes($key, $value)
    {
        $this->attributes->add($key, $value);
    }

    /**
     * @param Category $category
     */
    public function category(Category $category)
    {
        $this->category = $category;

        $this->category->categorise($this);
    }

    /**
     * @param Closure $actions
     */
    public function action(Closure $actions)
    {
        call_user_func($actions, $this);
    }

    /**
     * @param $key
     *
     * @return mixed
     */
    public function __get($key)
    {
        if (property_exists($this, $key)) {
            return $this->$key;
        }

        if ($this->attributes->has($key)) {
            return $this->attributes->get($key);
        }
    }
}
