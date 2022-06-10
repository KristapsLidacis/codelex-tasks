<?php
//Write a program called CheckOddEven which prints "Odd Number" if the int variable “number” is odd, or “Even Number”
// otherwise. The program shall always print “bye!” before exiting.
$number = readline("Enter number: ");

echo CheckOddEven($number);


function CheckOddEven(int $x): string{
    if($x % 2 === 0){
        return "Even number \n bye!" .PHP_EOL;

    }
    else{
        return "Odd number \n bye!" .PHP_EOL;
    }
}