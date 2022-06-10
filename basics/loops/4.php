<?php
$length = readline('Max value? ');

for($i = 0; $i < $length; $i++){
    if($i % 20 === 0){
        echo ' '.PHP_EOL;
    }else
    {
        if($i % 3 === 0 && $i % 5 === 0){
            echo "FizzBuzz ";
        }
        elseif($i % 3 === 0){
            echo "Fizz ";
        }
        elseif($i % 5 === 0){
            echo "Buzz ";
        }
        else{
            echo "$i ";
        }
    }
}