<?php
$size = (int)readline('How many levels? ');
$stars = 8;

$lineWidth = $stars * ($size -1);

for($i = 0; $i < $size; $i++){

    $starsOnLine = $stars * $i;
    $slashCount = ($lineWidth - $starsOnLine) /2;
    for($j = 0; $j < $slashCount; $j++){
        echo '/';
    }
    for($j = 0; $j < $starsOnLine; $j++){
        echo '*';
    }
    for($j = 0; $j < $slashCount; $j++){
        echo '\\';
    }
    echo ' '.PHP_EOL;
}


