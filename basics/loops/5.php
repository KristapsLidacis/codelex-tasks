<?php
echo "Welcome to Piglet!" .PHP_EOL;
$stop = false;
$score = 0;
$prompt = 'y';
do{
    if($prompt == 'no' || $prompt == 'n'){
        $stop = true;
        break;
    }else{
        $dice = rand(1, 6);
        if($dice != 0){
            echo "You rolled a $dice" .PHP_EOL;
            $score = $score + $dice;
        }
        else{
            echo "You rolled a $dice!" .PHP_EOL;
            $stop = true;
            $score = 0;
        }
    }
    echo "Roll again? ";
    $prompt = strtolower(readLine());
}while(!$stop);

echo "You got $score points";