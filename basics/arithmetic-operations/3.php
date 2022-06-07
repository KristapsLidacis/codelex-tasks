<?php

$sum = 0;
$lowerBound = 1;
$upperBound = 100;
while($lowerBound <= $upperBound){
    $sum = $sum +$lowerBound;

    $lowerBound++;
}
$average = $sum / $upperBound;
echo "The sun of 1 to 100 is $sum" .PHP_EOL;
echo "The average is $average";
