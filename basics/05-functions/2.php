<?php

function multiplyfunct(int $base, int $factor): void{
    echo $base*$factor;
}

multiplyfunct(10, 5);

function multiplyfunct2(int $base, int $factor): int{
    return $base*$factor;
}

echo multiplyfunct2(10, 5);