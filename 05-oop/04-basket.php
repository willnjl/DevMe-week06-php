<?php

declare(strict_types=1);

require __DIR__ . "/vendor/autoload.php";

class Basket
{
    private $contents;

    public function __construct()
    {
        $this->contents = collect();
    }

    public function add(BasketItem $item) : Basket
    {
        $this->contents->push($item) ;
        return $this;
    }

    public function total() : float
    {
        return $this->contents->reduce(function($sum, $current){
            return $sum += $current->getPrice();
        },0);
    }

    public function items() : array
    {
        return $this->contents->map(fn($item) => $item->getName())->all();
    }
}

class BasketItem
{
    private $name;
    private $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
        return $this;
    }

    public function getPrice()
    {
        return $this->price;
    }
    
    public function getName()
    {
        return $this->name;
    }
}

$basket = new Basket();

$item1 = new BasketItem("coffee", 3.50);
$item2 = new BasketItem("tea", 2.50);

$basket->add($item1);
$basket->add($item2);


dump($basket->total()); // £6.00
dump($basket->items()); // ["coffee","tea"]