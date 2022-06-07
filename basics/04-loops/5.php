<?php
$john = new stdClass();
$john->name = "John";
$john->surname = "Doe";
$john->age = 24;
$john->birthday = '13.05.1998';

$Jane = new stdClass();
$Jane -> name = "Jane";
$Jane -> surname = "Doe";
$Jane -> age = 20;
$Jane -> birthday = '21.02.2001';

$items =[$john, $Jane];

foreach ($items as $i){

    echo "$i->name $i->surname $i->age $i->birthday" . PHP_EOL;
}