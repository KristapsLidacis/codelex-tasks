<?php


for ($i = 1; $i < 110; $i++){
    if($i % 3 === 0){
        echo "Coza ";
    }
    if($i % 5 === 0){
        echo "Loza ";
    }
    if($i % 7 === 0){
        echo "Woza ";
    }
    if($i % 5 === 0 && $i % 3 === 0){
        echo "CozaLoza ";
    }
    if($i % 7 === 0 && $i % 3 === 0){
        echo "CozaWoza ";
    }
    if($i % 7 === 0 && $i % 5 === 0){
        echo "LozaWoza ";
    }
    else{
        echo $i .' ';
    }

    if($i % 11 === 0){
        echo ' '.PHP_EOL;
    }
}