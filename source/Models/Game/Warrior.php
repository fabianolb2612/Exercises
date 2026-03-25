<?php

namespace source\Models\Game;

class Warrior extends Character
{
    private float $defense;

    public function __construct(string $name,float $life,float $mana,float $strength,float $defense)
    {
        parent::__construct($name, $life, $mana, $strength);
        $this->defense = $defense;
    }

    public function getDefense(): float
    {
         return $this->defense; 
    }
    public function setDefense(float $defense): void 
    { 
        $this->defense = $defense;
    }

    public function describe(): string
    {
        return parent::describe() .
               "Defense: {$this->defense}<br><br>";
    }
}