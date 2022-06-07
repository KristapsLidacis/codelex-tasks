<?php
$fruits = [
    [
        "name" => "apple",
        "weight" => 10
    ],
    [
        "name" => "watermelone",
        "weight" => 100
    ],
    [
        "name" => "mango",
        "weight" => 1
    ]
];

//$costs = [];
foreach ($fruits as $fruit) {
            echo $fruit["name"]. ' ' .$fruit["weight"] . " Shipping " . getWeight($fruit["weight"]) .PHP_EOL;
}


function getWeight(int $wright): int{
    if($wright >= 10) return 2;

    return 1;
}