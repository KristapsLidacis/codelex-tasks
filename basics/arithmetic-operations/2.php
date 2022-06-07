<?php

$number = readline("Enter number: ");

echo checkIfOdd($number);


function checkIfOdd(int $x): string{
    if($x % 2 === 0){
        return "Even number \n bye!" .PHP_EOL;

    }
    else{
        return "Odd number \n bye!" .PHP_EOL;
    }
}