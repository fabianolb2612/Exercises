<?php

namespace source\Models;

class Order
{
    private $id;
    private $customerName;
    private $total;

    public function __construct(int $id, string $customerName, float $total)
    {
        $this->id = $id;
        $this->customerName = $customerName;
        $this->total = $total;
    }
    public function getId(): int
    {
        return $this->id;
    }
    public function getCustomerName(): string
    {
        return $this->customerName;
    }
    public function getTotal():float
    {
        return $this->total;
    }
   public function setId(int $id): void
    {
         $this->id = $id; 
    }
    public function setCustomerName(string $customerName): void 
    {
         $this->customerName = $customerName; 
    }
    public function setTotal(float $total): void 
    {
         $this->total = $total;
    }

    public function addFee(float $percent): void
    {
         if ($percent > 0) {
            $this->total += ($this->total * ($percent / 100));
        }
    }
    public function show(): string 
    {
        return "Pedido {$this->id}: " . $this->customerName . " - R$ " . number_format($this->total, 2, ",", ".") . "<br>";
    }

}
