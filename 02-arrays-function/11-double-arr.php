<?php

require __DIR__ . "/vendor/autoload.php";



function double($arr){
    return collect($arr)->map(fn($n1) => $n1 * 2);
}


// function double($arr){
//     $output = [];
//     forEach($arr as $index => $val){
//         $output[] = $val * 2;
//     }
//     return $output;
// }

dump(
    double([2, 3, 4, 5, 6]), // [4, 6, 8, 10, 12]
    double([1, 2, 5]), // [2, 4, 10]
);