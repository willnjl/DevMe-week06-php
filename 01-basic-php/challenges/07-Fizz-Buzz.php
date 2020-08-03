<?php 

require __DIR__ . "/vendor/autoload.php";

for($i = 1; $i <= 100; $i += 1){
    $fizz = $i % 3 === 0 ? "Fizz": "" ; 
    $buzz = $i % 5 === 0 ? "Buzz": "" ;
    $string = $fizz || $buzz ? $fizz . $buzz : $i;

    dump($string);
};

?>