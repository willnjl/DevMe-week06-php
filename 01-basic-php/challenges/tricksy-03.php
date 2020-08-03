<?php 

require __DIR__ . "/vendor/autoload.php";

$count = 1;
$mulitiplier = 1;
$result = 1;

while($mulitiplier < 16){
    
    if($count % 16  === 0){
        $mulitiplier += 1;
        $count = 1;
        echo "\n";
    }
    $result = $count * $mulitiplier;
    echo $result. " ";
    $count += 1;
}



// for($i = 1; $i <= 255; $i += 1){

// };
?>