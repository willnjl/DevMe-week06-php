<?php

require __DIR__ . "/vendor/autoload.php";

function average5($n1, $n2, $n3, $n4, $n5){
    return ($n1 + $n2 + $n3 + $n4 + $n5) / 5;
};

dump(average5(1, 2, 3, 4, 5)); // 3