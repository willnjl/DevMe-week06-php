<?php

require __DIR__ . "/vendor/autoload.php";

function validEmail($str){
    return preg_match('/^.+@[a-z]+[.][a-z]+/', $str) === 1;
}

dump(validEmail(" blahf   ")); // false
dump(validEmail(" blah@f")); // false
dump(validEmail("blah@ fish.horse")); // false
dump(validEmail(" blah@fish.horse")); // true
dump(validEmail("blah@fish.horse ")); // true
dump(validEmail(" blah@fish.horse ")); // true