<?php

use source\Models\Employee;

require __DIR__ . "/../../source/autoload.php";



$employees = [
    new Employee(1, "Fabiano", 1300),
    new Employee(2, "José", 2000),
    new Employee(3, "Vinicius", 3000),
    new Employee(4,"Cauã", 4000)
];

$employees[0]->raise(10);

foreach ($employees as $employee) {
    echo $employee->show();
}