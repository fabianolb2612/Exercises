<?php

namespace source\Models\Game;

class Thief extends Character
{
    private float $agility;

<<<<<<< HEAD
    public function __construct(string $name,float $life,float $mana,float $strength,float $agility)
    {
=======
    public function __construct(
        string $name,
        float $life,
        float $mana,
        float $strength,
        float $agility
    ) {
>>>>>>> 348ded57c989eeedc3a03f9dcbe61f5c20836a27
        parent::__construct($name, $life, $mana, $strength);
        $this->agility = $agility;
    }

    public function getAgility(): float
    { 
        return $this->agility;
    }
    public function setAgility(float $agility): void
    { 
        $this->agility = $agility; 
    }

    public function describe(): string
    {
        return parent::describe() .
               "Agility: {$this->agility}<br><br>";
    }
}