<?php
//Write a program to compute the product of integers from 1 to 10 (i.e., 1×2×3×...×10), as an int.
// Take note that it is the same as factorial of N.

$x = 1;
$step = 10;
$i = 1;

while($i <= $step){
    $x = $x * $i;

    $i++;
}

echo $x .PHP_EOL;
