<?php

require __DIR__ . "/../../source/autoload.php";

use source\Models\Company\Employee;
use source\Models\Company\Seller;
use source\Models\Company\Manager;


$employees =
[
    new Employee(1,1, "João", "joao@gmail.com", "123", "foto.jpg", 160, 50),
    new Employee(2,1, "Maria", "maria@gmail.com", "123", "foto.jpg", 150, 60),
];
    $employees[0]->setHoursWorked(170);
$sellers = 
[
    new Seller(3,1, "Carlos", "carlos@gmail.com", "123", "foto.jpg", 160, 50, 5000),
    new Seller(4,1, "Ana", "ana@gmail.com", "123", "foto.jpg", 140, 55, 8000),
];
    $sellers[0]->setTotalSales(6000);

$manager = new Manager(5,1, "Roberto", "roberto@gmail.com", "123", "foto.jpg", 160, 70, 2000);
    $manager->setBonus(2500);
    echo "Salario do gerente:" . $manager->calculateSalary() . "<br><br>";
    echo $manager->show() . "<br>";
foreach ($employees as $employee)
    {
        echo $employee->calculateSalary() . "<br>";
        echo $employee->show() . "<br>";

    }
foreach($sellers as $seller)
    {
        echo $seller->calculateSalary() . "<br>";
        echo $seller->show() . "<br>";
    }

