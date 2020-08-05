<?php

// Create a class that represents a Wombat

// You should be able to give the wombat a name when you create it.
// The wombat should have a getName() method that returns its name
// The wombat should have a sayHelloTo($wombat) method that you pass another wombat to and it will return a greeting
// The wombat should have a giveHug() method and a howManyHugs() method. howManyHugs() should return the number of hugs the wombat has been given



require __DIR__ . "/vendor/autoload.php";

class Wombat
{
    private $name;
    private $hugs = 0;

    public function __construct ($name){
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function howManyHugs()
    {
        return $this->hugs;
    }

    public function sayHelloTo($wombat)
    {
        return "Hello {$wombat->getName()}";
    }

    public function giveHug()
    {
        $this->hugs += 1;
        return $this;
    }
}

$tish = new Wombat("Tish");
$fonny = new Wombat("Fonny");

$tishName = $tish->getName();
dump($tishName); // "Tish"

$greeting = $tish->sayHelloTo($fonny);
dump($greeting); // "Hello Fonny"

$tish->giveHug();
dump($tish->howManyHugs()); // 1

$fonny->giveHug()->giveHug()->giveHug();
dump($fonny->howManyHugs()); // 3