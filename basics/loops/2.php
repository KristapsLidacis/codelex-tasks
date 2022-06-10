<?php

echo "Input number of terms: ";

//todo complete loop to multiply i with itself n times, it is NOT allowed to use built-in pow() function

$n = (int)readline();
$res = $n;
for($i = 1; $i < $n; $i++){
    $res = $res * $n;
}
echo $res .PHP_EOL;