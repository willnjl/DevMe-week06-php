<?php 

declare(strict_types=1);

namespace App\People;

class Person
{
    private $name;
    private $dob;

    public function __construct(string $name, string $dob)
    {
       $this->name = $name;
       $this->dob = $dob;
    }
}