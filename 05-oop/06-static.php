<?php

require __DIR__ . "/vendor/autoload.php";

// ... your classes here

// create some people
$carlton = new Person("Carlton", 25);
$ida = new Person("Ida", 32);
$estelle = new Person("Estelle", 57);
$jana = new Person("Jana", 48);

// create a house and put some peeps in
$house1 = new House();
$house1->addDweller($carlton)
       ->addDweller($ida);