<?php

// declare(strict_types=1);
include_once __DIR__ . '/vendor/autoload.php';



echo "\nQuestion 1:\n";

use App\Hello;

$sayHi = new Hello();

// dump($sayHi->hello("Orb")); // "Hello Orb"
// dump($sayHi->hello("Horse")); // "Hello Horse"

echo "\nQuestion 2\n";

use App\Person;

$person1 = new Person("Lynne",  "Ramsay");
$person2 = new Person("Wes", "Anderson");

// dump($person1->sayHelloTo($person2)); // "Hello Wes Anderson"
// dump($person2->sayHelloTo($person1)); // "Hello Lynne Ramsay"

echo "\nQuestion 3:\n";

use App\Stuff\Things\Potato;

$potato = new Potato();
$potato->water()->water();

// dump($potato->hasGrown()); // false

$potato->water()->water();
// dump($potato->hasGrown()); // false

$potato->water();
// dump($potato->hasGrown()); // true

$potato->water()->water();
// dump($potato->hasGrown()); // true

echo "\nQuestion 4:\n";

use App\Library\Book;

$book = new Book("Zero: The Biography of a Dangerous Idea", 256);

// read 12 pages
$book->read(12);
dump($book->currentPage()); // 13 - start on page 1

// read another 25 pages
$book->read(25);
dump($book->currentPage()); // 38