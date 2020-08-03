<?php 

require __DIR__ . "/vendor/autoload.php";

$result = 0;

for($i = 1; $i <= 50; $i += 1){
    $result += $i;
}

dump($result);

?>