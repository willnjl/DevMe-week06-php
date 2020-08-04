<?php

//Create a function, zOrQ, that returns true if the given string contains the letter q or z (uppercase and lowercase):

require __DIR__ . "/vendor/autoload.php";

function zOrQ($str){
    return preg_match('/[zq]/i', $str) === 1; 
}

dump(zOrQ("blah")); // false
dump(zOrQ("blqh")); // true
dump(zOrQ("bZ3h5")); // true
dump(zOrQ("bz3h5")); // true