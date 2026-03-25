<?php
namespace source\Models\Company;

class Seller extends Employee {
    private float $totalSales;

    public function __construct($id,$idType,$name,$email,$password,$photo,float $hoursWorked,float $hourValue,float $totalSales)
    {
        parent::__construct($id, $idType, $name, $email, $password, $photo, $hoursWorked, $hourValue);
        $this->totalSales = $totalSales;
    }

    public function getTotalSales(): float {
        return $this->totalSales;
    }

    public function setTotalSales(float $totalSales): void {
        $this->totalSales = $totalSales;
    }

    public function calculateCommission(): float {
        return $this->totalSales * 0.10;
    }

    public function calculateSalary(): float {
        return parent::calculateSalary() + $this->calculateCommission();
    }

    public function show(): string {
        return "Vendedor: #{$this->getId()} - Nome: {$this->getName()}<br>" .
               "Email: {$this->getEmail()}<br>" .
               "Horas Trabalhadas: " . number_format($this->getHoursWorked(), 2, ',', '.') . "<br>" .
               "Valor da Hora: R$ " . number_format($this->getHourValue(), 2, ',', '.') . "<br>" .
               "Salário Base: R$ " . number_format(parent::calculateSalary(), 2, ',', '.') . "<br>" .
               "Total de Vendas: R$ " . number_format($this->totalSales, 2, ',', '.') . "<br>" .
               "Comissão (10%): R$ " . number_format($this->calculateCommission(), 2, ',', '.') . "<br>" .
               "Salário Total: R$ " . number_format($this->calculateSalary(), 2, ',', '.') . "<br>";
    }
}