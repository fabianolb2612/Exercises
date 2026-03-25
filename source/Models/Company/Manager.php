<?php
namespace source\Models\Company;

class Manager extends Employee {
    private float $bonus;

    public function __construct($id,$idType, $name,$email,$password,$photo,float $hoursWorked,float $hourValue,float $bonus)
    {
        parent::__construct($id, $idType, $name, $email, $password, $photo, $hoursWorked, $hourValue);
        $this->bonus = $bonus;
    }

    public function getBonus(): float {
        return $this->bonus;
    }

    public function setBonus(float $bonus): void {
        $this->bonus = $bonus;
    }

    public function calculateSalary(): float {
        return parent::calculateSalary() + $this->bonus;
    }

    public function show(): string {
        return "Gerente: #{$this->getId()} - Nome: {$this->getName()}<br>" .
               "Email: {$this->getEmail()}<br>" .
               "Horas Trabalhadas: " . number_format($this->getHoursWorked(), 2, ',', '.') . "<br>" .
               "Valor da Hora: R$ " . number_format($this->getHourValue(), 2, ',', '.') . "<br>" .
               "Salário Base: R$ " . number_format(parent::calculateSalary(), 2, ',', '.') . "<br>" .
               "Bônus Fixo: R$ " . number_format($this->bonus, 2, ',', '.') . "<br>" .
               "Salário Total: R$ " . number_format($this->calculateSalary(), 2, ',', '.') . "<br>";
    }
}