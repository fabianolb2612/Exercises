<?php

namespace source\Models\Game;

class Wizard extends Character
{
    private float $intelligence;

<<<<<<< HEAD
    public function __construct(string $name,float $life,float $mana,float $strength,float $intelligence)
    {
=======
    public function __construct(
        string $name,
        float $life,
        float $mana,
        float $strength,
        float $intelligence
    ) {
>>>>>>> 348ded57c989eeedc3a03f9dcbe61f5c20836a27
        parent::__construct($name, $life, $mana, $strength);
        $this->intelligence = $intelligence;
    }

    public function getIntelligence(): float 
    { 
        return $this->intelligence;
    }
    public function setIntelligence(float $intelligence): void 
    { 
        $this->intelligence = $intelligence; 
    }

    public function describe(): string
    {
        return parent::describe() .
               "Intelligence: {$this->intelligence}<br><br>";
    }
}