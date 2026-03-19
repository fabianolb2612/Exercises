<?php
namespace Source\Models;
class Employee
{
    private $id;
    private $name;
    private $salary;

    public function __construct(int $id, string $name, float $salary)
    {
        $this->id = $id;
        $this->name = $name;
        $this->salary = $salary;
    }
    public function getId(): int
    {
        return $this->id;
    }
     public function setId(int $id): void
     {
        $this->id = $id;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function setName(string $name): void
    {
        $this->name = $name;
    }
    public function getSalary(): float
    {
        return $this->salary;
    }
    public function setSalary(float $salary): void 
    {
         $this->salary = $salary; 
         }

    public function raise(float $percent): void
    {
         if($percent > 0 ){
            $this->salary += ($this->salary * ($percent / 100));
         }
    }
    public function show(): string
    {
        return "Funcionario {$this->id}: Nome: " . $this->name . " Salário: R$ " . number_format($this->salary, 2, ",", ".") . "<br>";
    }
    
}