<?php 

require __DIR__ . "/vendor/autoload.php";

for($i = 0; $i <= 50; $i += 1){
    if($i % 2 === 0){
        dump($i);
    }
}
?>