<?php

require __DIR__ . "/vendor/autoload.php";

function stone($kg) {
    return $kg / 6.35;
} ;


dump(
    stone(74), // 11.65278
    stone(50), // 7.8735
);