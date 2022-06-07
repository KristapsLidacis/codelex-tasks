<?php

$weight = readline("Give me weight: ");
$height = readline("Give me height: ");


$BMI = (($weight * 2.2046) / (pow(($height * 0.39370),2))) * 703;

switch ($BMI){
    case $BMI <= 18.5:
        echo "underweight";
        break;
    case $BMI >= 25:
        echo "overweight";
        break;
    default:
        echo "optimal";
        break;
}