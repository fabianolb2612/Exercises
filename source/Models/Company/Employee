<?php
namespace source\Models\Company;

use source\Models\User;

class Employee extends User {
    private float $hoursWorked;
    private float $hourValue;

    public function __construct($id,$idType,$name,$email,$password, $photo,float $hoursWorked,float $hourValue) 
    {
        parent::__construct($id, $idType, $name, $email, $password, $photo);
        $this->hoursWorked = $hoursWorked;
        $this->hourValue = $hourValue;
    }

    public function getHoursWorked(): float {
        return $this->hoursWorked;
    }

    public function setHoursWorked(float $hoursWorked): void {
        $this->hoursWorked = $hoursWorked;
    }

    public function getHourValue(): float {
        return $this->hourValue;
    }

    public function setHourValue(float $hourValue): void {
        $this->hourValue = $hourValue;
    }

    public function calculateSalary(): float {
        return $this->hoursWorked * $this->hourValue;
    }

    public function show(): string {
        return "Funcionário: #{$this->getId()} - Nome: {$this->getName()}<br>" .
               "Email: {$this->getEmail()}<br>" .
               "Horas Trabalhadas: " . number_format($this->hoursWorked, 2, ',', '.') . "<br>" .
               "Valor da Hora: R$ " . number_format($this->hourValue, 2, ',', '.') . "<br>" .
               "Salário: R$ " . number_format($this->calculateSalary(), 2, ',', '.') . "<br>";
    }
}