<?php

echo "Enter the number.";

//todo print if number is positive or negative

$number = (int)readline();
if($number < 0){
    echo 'negative';
}
else{
    echo 'positive';
}