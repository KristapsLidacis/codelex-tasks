<?php
$elements = [1,2,3, 0.5, 'bomb', 15, 15.523];

for($i = 0; $i < count($elements); $i++){
   if(is_integer($elements[$i])){
       echo doubleInt($elements[$i]) .PHP_EOL;
   }
}

function doubleInt(int $i):int{
    return $i*2;
}