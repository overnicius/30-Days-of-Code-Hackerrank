<?php



$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$t = array_reverse($arr);
$s = implode(' ', $t);

for($i = 0; $i < strlen($s); $i++){
    print $s[$i];
}
