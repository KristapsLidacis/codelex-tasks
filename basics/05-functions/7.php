<?php
$person = new stdClass();
$person->name = "Krsitaps";
$person->license = "M130598";
$person->money = 1000;

$gun1 = new stdClass();
$gun1->license="M130598";
$gun1->price=785;
$gun1->name="Deagle";

$gun2 = new stdClass();
$gun2->license="AAAA";
$gun2->price=123;
$gun2->name="Meh";

$gun3 = new stdClass();
$gun3->license="trespassing";
$gun3->price=12345;
$gun3->name="Shotgun";

$store=[$gun1, $gun2, $gun3];

foreach ($store as $item) {
    var_dump(in_array($person->license, $item));
}


