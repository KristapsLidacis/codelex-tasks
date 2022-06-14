<?php
$person = new stdClass();
$person->name = 'Kristaps';
$person->license = ['B', 'A', 'B1'];
$person->money = 1000;

$store=[
    addGun('A', 123.25, 'Deagle'),
    addGun('A', 23.25, 'Airgun'),
    addGun('C', 883.25, 'Swifter'),
    addGun('B2', 123.25, 'ShortBow')

];

function addGun(string $license, float $price, string $name): stdClass{
    $gun = new stdClass();
    $gun->license=$license;
    $gun->price=$price;
    $gun->name=$name;
    return $gun;
}

foreach ($store as $item) {
    if(in_array($item->license, $person->license)){
        if($item->price < $person->money){
            echo $person->name .' can buy: '. $item->name .' for '.$item->price .' with ' . ($person->money -
                    $item->price) ." change".PHP_EOL;
        }else{
            echo $person->name .' can\'t buy: '. $item->name .' for '.$item->price.', because he has less money'.PHP_EOL;
        }
    }
    else{
        echo $person->name .' can\'t buy: '. $item->name .' because he don\'t have the license ' .$item->license .PHP_EOL;
    }
}

