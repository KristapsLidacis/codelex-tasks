<?php

$fooCorp = [
    [
        "employee" => "Employee 1",
        "basePay" => 7.50,
        "hoursWorked" => 35
    ],
    [
        "employee" => "Employee 2",
        "basePay" => 8.20,
        "hoursWorked" => 47
    ],
    [
        "employee" => "Employee 1",
        "basePay" => 10.00,
        "hoursWorked" => 73
    ]
];

foreach ($fooCorp as $employee) {
    $payment = getPaid($employee["basePay"], $employee["hoursWorked"]);
    echo $employee["employee"] .' Base pay: '. $employee["basePay"]. '; Worked Hours: '. $employee["hoursWorked"]. '; Payment:' . $payment .PHP_EOL;
}

function getPaid(float $basePay, float $hoursWorked ){
    if($hoursWorked >= 60){
        return "Too much work hours";
    }
    elseif($basePay < 8.00) {
        return "Too small hourly wage";
    }
    if($hoursWorked >= 40){
        return ($basePay * 40) + (($basePay * 1.5) * ($hoursWorked - 40));
    }
    return $basePay * $hoursWorked;


}