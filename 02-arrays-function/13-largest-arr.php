<?php

require __DIR__ . "/vendor/autoload.php";

function largest($array){
    return collect($array)->reduce(fn($acc, $val) => $val > $acc ? $val : $acc, $array[0]);
}


// function largest($array){
//     $output = $array[0];
//     foreach($array as $index => $value){
//         if($value > $output){
//             $output = $value;
//         }
//     }
//     return $output;
// }

dump(
    largest([2, 4, 6, 4, 7, 5]), // 7
    largest([-2, 4, 6, 4, 2, -7, 5]), // 6
    largest([-2, -4, -4, -7, -5]), // -2
);