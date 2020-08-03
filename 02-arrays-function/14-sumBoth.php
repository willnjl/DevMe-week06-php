<?php

require __DIR__ . "/vendor/autoload.php";

function sumBoth($arr1, $arr2){
    return collect($arr1)->concat($arr2)->sum();
}



/*
function sum($arr){
    $output = 0;
    foreach($arr as $index => $value){
        $output += $value;
    }
    return $output;
}

function sumBoth($arr1, $arr2){
    return sum($arr1) + sum($arr2);
}

*/
dump(
    sumBoth([2, 3, 4, 5, 6], [1, 2, 3, 4]), // 30
    sumBoth([2, 3, 4, 5, 6], [5, 10, 12]), // 47
);