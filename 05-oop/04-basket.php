<?php

require __DIR__ . "/vendor/autoload.php";

class Basket
{
    private $contents = [];

    public function add($basketItem)
    {
        $this->contents[] = $basketItem;
        return $this;
    }

    public function total()
    {
        return collect($this->contents)->reduce(function($sum, $current){
            return $sum += $current->getPrice();
        },0);
    }

    public function items()
    {
        return collect($this->contents)->pluck('itemName');
    }
}

class BasketItem
{
    private $itemName;
    private $itemPrice;

    public function __construct($name, $price)
    {
        $this->itemName = $name;
        $this->itemPrice = $price;
        return $this;
    }

    public function getPrice()
    {
        return $this->itemPrice;
    }
    
    public function getName()
    {
        return $this->itemName;
    }
}

$basket = new Basket();

$item1 = new BasketItem("coffee", 3.50);
$item2 = new BasketItem("tea", 2.50);

$basket->add($item1);
$basket->add($item2);


// dump($basket->total()); // £6.00
dump($basket->items()); // ["coffee","tea"]