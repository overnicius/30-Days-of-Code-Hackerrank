<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
$t=fgets($_fp);

for($i=0;$i<$t;$i++){
    $word= trim(fgets($_fp));
    for($j=0;$j<strlen($word);$j++){
        if($j%2==0){
            print $word[$j];
        }
    }
    print " ";
    for($j=0;$j<strlen($word);$j++){
        if($j%2!=0){
            print $word[$j];
        }
    }
    print "\n";
}
fclose($_fp);