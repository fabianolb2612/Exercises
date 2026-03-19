<?php

namespace Source\Models;


class Product
 {
    private $id;
    private $name;
    private $price;

    public function __construct(int $id, string $name, float $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function getId(): ?int 
    {
         return $this->id;
    }
    public function getName(): ?string
    {
         return $this->name;
    }
    public function getPrice(): ?float {
    return $this->price;
    }

    public function setId(int $id): void 
    {
        $this->id = $id; 
    }
    public function setName(string $name): void 
    { 
    $this->name = $name; 
    }
    public function setPrice(float $price): void
    { 
        $this->price = $price;
    }

    public function discount(float $percent): void
    {
        if ($percent > 0 && $percent <= 100) {
            $this->price -= ($this->price * ($percent / 100));
        }
    }

    public function show(): string
    {
        return "Produto {$this->id}: " . $this->name . " - R$ " . number_format($this->price, 2, ",", ".") . "<br>";
    }
}