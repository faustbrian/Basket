<?php

namespace DraperStudio\Basket;

use ArrayIterator;
use Closure;
use Countable;
use IteratorAggregate;

class Collection implements Countable, IteratorAggregate
{
    private $items;

    public function __construct(array $items = [])
    {
        $this->items = $items;
    }

    public function add($key, $value)
    {
        $this->items[$key] = $value;
    }

    public function all()
    {
        return $this->items;
    }

    public function contains($value)
    {
        return in_array($value, $this->items);
    }

    public function containsKey($value)
    {
        return array_key_exists($value, $this->items);
    }

    public function count()
    {
        return count($this->items);
    }

    public function each(Closure $callback)
    {
        array_map($callback, $this->items);
    }

    public function isEmpty()
    {
        return empty($this->items);
    }

    public function filter(Closure $callback)
    {
        return new self(array_filter($this->items, $callback));
    }

    public function first()
    {
        return reset($this->items);
    }

    public function keys()
    {
        return array_keys($this->items);
    }

    public function get($key)
    {
        return $this->items[$key];
    }

    public function last()
    {
        return end($this->items);
    }

    public function map(Closure $callback)
    {
        return new self(array_map($callback, $this->items, array_keys($this->items)));
    }

    public function pop()
    {
        return array_pop($this->items);
    }

    public function prepend($value)
    {
        array_unshift($this->items, $value);
    }

    public function push($value)
    {
        $this->items[] = $value;
    }

    public function remove($key)
    {
        unset($this->items[$key]);
    }

    public function search($value)
    {
        return array_search($value, $this->items, true);
    }

    public function shift()
    {
        return array_shift($this->items);
    }

    public function sort(Closure $callback)
    {
        uasort($this->items, $callback);
    }

    public function values()
    {
        $this->items = array_values($this->items);
    }

    public function toArray()
    {
        return $this->items;
    }

    public function getIterator()
    {
        return new ArrayIterator($this->items);
    }
}
