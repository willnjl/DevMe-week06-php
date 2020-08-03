<?php

require __DIR__ . "/vendor/autoload.php";

function squares($arr){
    return collect($arr)->map(fn($n1) => $n1 * $n1);
}

/*
function squares($arr) {
    $result = [];
    foreach($arr as $index => $value){
        $result[] = $value * $value;
    };
    return $result;
};
*/
dump(
    squares([2, 3, 4]), // [4, 9, 16]
    squares([2, 3, 4, 5, 6]), // [4, 9, 16, 25, 36]
);