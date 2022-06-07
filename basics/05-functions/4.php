<?php
$elina = new stdClass();
$elina -> name = "Elina";
$elina -> surname = "Lidace";
$elina -> age = 20;

$kristaps = new stdClass();
$kristaps -> name = "Kristaps";
$kristaps -> surname = "Lidacis";
$kristaps -> age = 24;

$jurgis = new stdClass();
$jurgis -> name = "Jurģis";
$jurgis -> surname = "Puiķis";
$jurgis -> age = 10;

$persons = [$elina, $kristaps, $jurgis];

function is18(int $age ): bool{
    if($age <= 18){
        return false;
    }
    else{
        return true;
    }
}

foreach ($persons as $person) {
    if(is18($person->age)){
        echo "This person $person->name $person->surname is adult" .PHP_EOL;
    }
    else{
        echo "This person $person->name $person->surname is underage" .PHP_EOL;
    }
}