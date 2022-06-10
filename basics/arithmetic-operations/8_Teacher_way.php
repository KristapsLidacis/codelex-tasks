<?php
    $employees = [
        createEmployee('Employee 1', 7.50, 35),
        createEmployee('Employee 2', 8.20, 47),
        createEmployee('Employee 3', 10.00, 73),
        createEmployee('Employee 4', 9.00, 44),
    ];

    function createEmployee(string $name, float $basePay, int $workedHours): stdClass
    {
        $employee = new stdClass();
        $employee->name = $name;
        $employee->basePay = $basePay;
        $employee->workedHours = $workedHours;
        return $employee;
    }

    function calculateSalary(stdClass $employee): float
    {
        $overtime = 0;
        $hours = $employee->workedHours;

        if ($hours > 40) {
            $overtime = $employee->workedHours - 40;
            $hours = 40;
        }

        return $employee->basePay * $hours + $overtime * ($employee->basePay * 1.5);
    }

    foreach ($employees as $employee) {
        echo "{$employee->name} ({$employee->workedHours} / {$employee->basePay}$) ";

        echo calculateSalary($employee) . '$';

        if ($employee->workedHours > 60) {
            echo " - Thanks for the free labor.";
        }

        if ($employee->basePay < 8.00) {
            echo " - You are not paid enough.";
        }

        echo PHP_EOL;
    }