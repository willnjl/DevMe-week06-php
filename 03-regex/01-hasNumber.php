<?php

require __DIR__ . "/vendor/autoload.php";

function hasNumber($str) {
    // return preg_match('/[a-z]*[0-9]+[a-z]*[0-9]*/', $str) === 1;
    return preg_match('/d+/', $str) === 1;
}

dump(hasNumber("blah")); // false
dump(hasNumber("bl3h")); // true
dump(hasNumber("bl3h5")); // true