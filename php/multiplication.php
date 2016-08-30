<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$N);

for($i=0;$i<10;$i++) {
    print ($N . " x " . ($i+1) . " = " . ($N*($i+1)) . "\n");
}

?>
