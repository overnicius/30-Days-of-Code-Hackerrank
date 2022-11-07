<?php



$n = intval(trim(fgets(STDIN)));

for ($i = 1; $i < 11; $i++){
    $result = $n * $i;
    
    echo $n. " x ". $i. " = " . $result ."\n";
}