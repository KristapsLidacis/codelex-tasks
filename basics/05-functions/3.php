<?php
$person = new stdClass();
$person -> name = "Elina";
$person -> surname = "Lidace";
$person -> age = 20;

function is18(int $age ): void{
    if($age <= 18){
        echo "This person is underage";
    }
    else{
        echo "This person is adult";
    }
}

is18($person->age);

function is18too(int $age ): bool{
    return $age >= 18;
}

if(is18too($person->age)){
    echo "This person $person->name $person->surname is adult" .PHP_EOL;
}
else{
    echo "This person $person->name $person->surname is not adult" .PHP_EOL;
}