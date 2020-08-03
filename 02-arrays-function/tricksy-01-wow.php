<?php

require __DIR__ . "/vendor/autoload.php";

function wow($n){
    $output = "w";
    for($i = 1; $i < $n; $i += 1){
        $output . "o";
        dump($i);
    }
    return $output . "w";
    

}

dump(wow(12)); // "Woooooooooooow"
dump(wow(4)); // "Woooow"