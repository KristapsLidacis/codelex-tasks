<?php
$desiredSum = (int)readLine("Desired sum: ");
$stop = false;
$dice1 = 0;
$dice2 =0;
$sum =0;
while(!$stop){
    $dice1 = rand(1, 6);
    $dice2 = rand(1, 6);
    $sum = $dice2 +$dice1;

    if($sum === $desiredSum){
        $stop = true;
    }
    else{
        echo "$dice1 and $dice2 =  $sum" .PHP_EOL;
    }
}

echo "$dice1 and $dice2 =  $sum".PHP_EOL;