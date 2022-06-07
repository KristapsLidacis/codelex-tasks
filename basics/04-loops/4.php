<?php
$arr = [7, 6, 13, 60, 23, 35, 92];

foreach ($arr as $item){
    if($item % 3 === 0){
        echo $item . PHP_EOL;
    }
}