<?php



$arr = array();

for ($i = 0; $i < 6; $i++) {
    $arr_temp = rtrim(fgets(STDIN));

    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}
$max = -100;
for($i=1; $i<count($arr)-1; $i++) {
    for($j=1; $j<count($arr[0])-1; $j++) {
        $sum = $arr[$i-1][$j-1] + $arr[$i-1][$j] + $arr[$i-1][$j+1]
            + $arr[$i][$j]
            + $arr[$i+1][$j-1] + $arr[$i+1][$j] + $arr[$i+1][$j+1];
        if( $sum > $max ) $max = $sum;
    }
}
echo $max;