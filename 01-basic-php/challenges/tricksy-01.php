<?php 

require __DIR__ . "/vendor/autoload.php";

$result = 0;

for($i = 1; $i <= 50; $i += 2){
    $result += $i;
    dump($result);
}
?>