<?php

namespace App;

class Person{
    private $firstName;
    private $lastName;

    public function __construct($firstName, $lastName)
    {
     $this->firstName = $firstName;
     $this->lastName = $lastName;
    }

    public function sayHelloTo(Person $person) : string
    {
        return "Hello, {$person->getName()}";
    }

    public function getName(): string
    {
        return "{$this->firstName} {$this->lastName}";
    }
}