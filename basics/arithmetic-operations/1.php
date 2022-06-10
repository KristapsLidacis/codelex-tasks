<?php
//Write a program to accept two integers and return true if the either one is 15 or if their sum or difference is 15.
$i1 = readline("Enter first number: ");
$i2 = readline("Enter second number: ");

echo ifFifteen($i1, $i2). PHP_EOL;

function ifFifteen(int $x1, int $x2): bool{
    if($x1 ===15 || $x2 === 15){
        return true;
    }

    if($x1 + $x2 === 15){
        return true;
    }

    if($x1 - $x2 === 15 || $x2 - $x1 === 15){
        return true;
    }

    return false;
}
