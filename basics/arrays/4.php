<?php
//Write a program that creates an array of ten integers. It should put ten random numbers from 1 to 100 in the array.
// It should copy all the elements of that array into another array of the same size.
//
//Then display the contents of both arrays. To get the output to look like this, you'll need a several for loops.
//
//Create an array of ten integers
//Fill the array with ten random numbers (1-100)
//Copy the array into another array of the same capacity
//Change the last value in the first array to a -7
//Display the contents of both arrays
$length = 10;
$array1 = array_fill(0, 10, null);
for($i = 0; $i < $length; $i++){
    $array1[$i] = rand(0,100);
}

$array2 = $array1;
$array1[count($array1)-1] = -7;
echo "Array 1: " .implode(', ', $array1) .PHP_EOL;

echo "Array 2: " .implode(', ', $array2).PHP_EOL;


