<?php

require __DIR__ . "/vendor/autoload.php";

function average($arr){
    return collect($arr)->reduce(fn($sum, $val) => $sum + $val,0) / count($arr);
}


/*
function average($arr){
    $result = 0;
    forEach($arr as $index => $val){
        $result += $val;
    }
    return $result / count($arr);
}
*/

dump(
    average([2, 3, 4, 5, 6]), // 4
    average([2, 3]), // 2.5
    average([10, 30]), // 20
    average([-4, -8, -9]), // -7
);