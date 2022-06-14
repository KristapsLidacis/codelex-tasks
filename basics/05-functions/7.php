<?php
$person = new stdClass();
$person->name = 'Kristaps';
$person->license = 'mf';
$person->money = 1000;

$store=[
    addGun('mf', 123.25, 'Deagle'),
    addGun('tv', 23.25, 'Airgun'),
    addGun('tv', 883.25, 'Swifter'),
    addGun('bk', 123.25, 'ShortBow')

];

function addGun(string $license, float $price, string $name): stdClass{
    $gun = new stdClass();
    $gun->license=$license;
    $gun->price=$price;
    $gun->name=$name;
    return $gun;
}

var_dump(in_array([$person->license], $store));



