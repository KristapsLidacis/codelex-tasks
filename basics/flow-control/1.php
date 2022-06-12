<?php

echo "Input the 1st number: ";
$x = (int)readline();
echo "Input the 2nd number: ";
$y = (int)readline();
echo "Input the 3rd number: ";
$z = (int)readline();
//todo print the largest number

if($x > $y && $x > $z){
    echo "$x is largest";
}
if($y > $x && $y > $z){
    echo "$y is largest";
}
else{
    echo "$z is largest";
}