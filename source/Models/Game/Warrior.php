<?php

namespace source\Models\Game;

class Warrior extends Character
{
    private float $defense;

<<<<<<< HEAD
    public function __construct(string $name,float $life,float $mana,float $strength,float $defense)
    {
=======
    public function __construct(
        string $name,
        float $life,
        float $mana,
        float $strength,
        float $defense
    ) {
>>>>>>> 348ded57c989eeedc3a03f9dcbe61f5c20836a27
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