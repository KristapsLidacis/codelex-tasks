<?php
//Write a program that picks a random number from 1-100. Give the user a chance to guess it.
// If they get it right, tell them so. If their guess is higher than the number, say "Too high."
// If their guess is lower than the number, say "Too low." Then quit. (They don't get any more guesses for now.)

//made with 3 tries
$myNumber = rand(1,100);
$tries = 3;
//echo $myNumber;
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
