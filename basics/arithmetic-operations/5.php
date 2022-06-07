<?php

$myNumber = rand(1,100);
$tries = 3;
echo $myNumber;
while($tries != 0){

    $guess = (int)readline("I'm thinking of a number between 1-100.  Try to guess it." .PHP_EOL);
    if($guess < $myNumber){
        echo "Sorry, you are too low.".PHP_EOL;
    }

    if($guess > $myNumber){
        echo "Sorry, you are too high." .PHP_EOL;
    }

    if($guess === $myNumber){
        $tries = -1;
        break;
    }

    $tries--;
}

echo $tries != -1 ? " I was thinking of $myNumber" : "You guessed it!  What are the odds?!?" .PHP_EOL;
echo "Thank you for playing";
