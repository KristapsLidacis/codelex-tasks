<?php
$min = (int)readline("Min? ");
$max = (int)readline("Max? ");

for($i = $min; $i <= $max; $i++){
    for($j = $i; $j <=$max; $j++){
        echo $j;
    }
    for($k = 1; $k < $i ; $k++){
        echo $k;
    }
    echo ' '.PHP_EOL;
}
