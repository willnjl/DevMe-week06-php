<?php
// Create a class that performs a series of transformations on a string. You can use the get() method to get the final result.

declare(strict_types=1);

require __DIR__ . "/vendor/autoload.php";

class StringyRedux
{
    private $string;

    public function __construct(string $string)
    {
        $this->string = $string;
    }

    public function repeat(int $n) : StringyRedux
    {
        $this->string = str_repeat($this->string, $n);
        return $this;
    }

    public function append(string $appendage) : StringyRedux
    {
        $this->string .= $appendage;
        return $this;
    }

    public function upper() : StringyRedux
    {
        $this->string = strtoupper($this->string);
        return $this;
    }

    public function lower() : StringyRedux
    {
        $this->string = strtolower($this->string);
        return $this;
    }
    
    public function get() : string
    {
        return $this->string;
    }
}

$string1 = new StringyRedux("Oop");
dump($string1->lower()->repeat(2)->get()); // "oopoop"

$string2 = new StringyRedux("Spoon");
dump($string2->repeat(2)->upper()->append("!")->get()); // "SPOONSPOON!"

$string3 = new StringyRedux("Na");
dump($string3
        ->repeat(2)
        ->append(" ")
        ->repeat(8)
        ->append(" ")
        ->append("Batman!")
        ->get()
    ); // "NaNa NaNa NaNa NaNa NaNa NaNa NaNa NaNa  Batman!"