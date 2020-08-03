<?php

require __DIR__ . "/vendor/autoload.php";

function even($n) {
    return $n % 2 === 0;
};

dump(even(1)); // false
dump(even(2)); // true