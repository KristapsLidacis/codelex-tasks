<?php
//Write a program that reads a positive integer and count the number of digits the number has.

$i = (int)readline('Give me integer: ');

if($i >= 0){
    echo $i. ' has '.strlen((string)$i).' digits' .PHP_EOL;
}
else{
    echo "It's negative, pleas give positive".PHP_EOL;
}
