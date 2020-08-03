<?php

require __DIR__ . "/vendor/autoload.php";

function both($arr1, $arr2){
    $collection1 = collect($arr1);
    $collection2 = collect($arr2);
    return $collection1->filter(fn($n) => $collection2->contains($n))->all();
}

dump(
    both([2, 3, 4, 5, 6], [1, 2, 5, 6]), // [2, 5, 6]
);