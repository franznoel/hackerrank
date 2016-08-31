<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
$T = fgets($_fp);

for ($i=0;$i<$T;$i++) {
    $word = fgets($_fp);
    $letters = str_split($word);

    $left_word = [];
    $right_word = [];

    for ($j=0;$j<count($letters);$j++) {
        if(ctype_alpha($letters[$j])) {
            if ($j%2==0) {
                if ($letters[$i]!= "\n")
                    array_push($left_word,$letters[$j]);
            } else {
                if ($letters[$i]!= "\n")
                    array_push($right_word,$letters[$j]);
            }
        }
    }

    // print_r($left_word);
    // print_r($right_word);
    
    $lw = implode('',$left_word);
    $rw = implode('',$right_word);
    print($lw . ' ' . $rw . "\n");
}
?>