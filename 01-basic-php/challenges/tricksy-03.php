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
    if($mulitiplier !== 16){
        echo $result . " ";
    }
    $count += 1;
};


/* zack's solution

for ($row = 1; $row <= 15; $row += 1) { 
    for ($col = 1; $col <= 15; $col += 1) { 
        echo(($col * $row) . "\t");
    }
    echo("\n");
};

*/