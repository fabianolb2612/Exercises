<?php

namespace source\Models\Game;

class Thief extends Character
{
    private float $agility;

    public function __construct(
        string $name,
        float $life,
        float $mana,
        float $strength,
        float $agility
    ) {
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