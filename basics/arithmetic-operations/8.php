<?php
//Foo Corporation needs a program to calculate how much to pay their hourly employees.
// The US Department of Labor requires that employees get paid time and a half for any hours over
// 40 that they work in a single week. For example, if an employee works 45 hours, they get 5 hours of overtime,
// at 1.5 times their base pay. The State of Massachusetts requires that hourly employees be paid at least $8.00
// an hour. Foo Corp requires that an employee not work more than 60 hours in a week.
//
//Summary
//An employee gets paid (hours worked) × (base pay), for each hour up to 40 hours.
//For every hour over 40, they get overtime = (base pay) × 1.5.
//The base pay must not be less than the minimum wage ($8.00 an hour). If it is, print an error.
//If the number of hours is greater than 60, print an error message.
//Write a method that takes the base pay and hours worked as parameters, and prints the
// total pay or an error. Write a main method that calls this method for each of these employees:


//My variant
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