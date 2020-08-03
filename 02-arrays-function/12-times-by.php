<?php

require __DIR__ . "/vendor/autoload.php";

function timesBy($arr, $multiplier){
   return collect($arr)->map(fn($n) => $n * $multiplier)->all();
}

// function timesBy($array, $multiplier){
//     $output = [];
//     foreach($array as $index => $val){
//         $output[] = $val * $multiplier;
//     }
//     return $output;
// }

dump(
    timesBy([2, 3, 4, 5, 6], 10), // [20, 30, 40, 50, 60]
    timesBy([2, 3, 4], 5), // [10, 15, 20]
    timesBy([2, 3, 4, 5, 6, 7], -5), // [-10, -15, -20, -25, -30, -35]
    timesBy([-3, -4, -5, -6], -5), // [15, 20, 25, 30]
);