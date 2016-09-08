<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
$T = fgets($_fp);

for ($i=0;$i<$T;$i++) {
    $word = fgets($_fp);
    $letters = str_split($word);

    $left_word = [];
    $right_word = [];

    $alphas = range('A', 'Z');
    $alpha_small = range('a','z');
    $alphabet = array_merge($alphas,$alpha_small); 
    // print_r($alphas);

    for ($j=0;$j<count($letters);$j++) {
        if(in_array($letters[$j],$alphabet)) {
            if ($j%2==0) {
                if ($letters[$i]!= "\n")
                    array_push($left_word,$letters[$j]);
            } else {
                if ($letters[$i]!= "\n")
                    array_push($right_word,$letters[$j]);
            }
        }
    }
    
    $lw = implode('',$left_word);
    $rw = implode('',$right_word);
    print($lw . ' ' . $rw . "\n");
}
?>