<?php

declare(strict_types=1);

require __DIR__ . "/vendor/autoload.php";

class Stringy
{
    private $string;

    public function __construct(string $str)
    {
        $this->string = $str;
    }

    public function lower() : string
    {
        return strtolower($this->string);
    }
    
    public function upper() : string 
    {
        return strtoupper($this->string);
    }

    public function append(string $str) : string
    { 
        return $this->string . $str;
    }

    public function repeat(int $n) : string
    {
        return str_repeat($this->string, $n);
    }
}

$string = new Stringy("Na");

// it can lowercase a string
dump($string->lower()); // "na"

// it can uppercase a string
dump($string->upper()); // "NA"

// it can concatenate
dump($string->append("blah")); // "Nablah"

// it can repeat a string
dump($string->repeat(5)); // "NaNaNaNaNa"