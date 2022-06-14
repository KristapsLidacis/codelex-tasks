<?php

$left = '/';
$middle = '*';
$right = '\\';

$middleCount = 0;
$leftCount = 16;
$rightCount = 16;
for($i = 0; $i < 5; $i++){
    echo str_repeat($left, $leftCount);
    echo str_repeat($middle, $middleCount);
    echo str_repeat($right, $rightCount);
    echo PHP_EOL;

    $leftCount -= 4;
    $rightCount -= 4;
    $middleCount +=8;
}