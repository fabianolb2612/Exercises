<?php

namespace source\Models\Game;

class Character
{
    private string $name;
    private float $life;
    private float $mana;
    private float $strength;

    public function __construct(string $name, float $life, float $mana, float $strength)
    {
        $this->name = $name;
        $this->life = $life;
        $this->mana = $mana;
        $this->strength = $strength;
    }


    public function getName(): string
    {
         return $this->name;
    }
    public function getLife(): float
    {
        return $this->life; 
    }
    public function getMana(): float {
        return $this->mana;
    }
    public function getStrength(): float
    { 
        return $this->strength;
    }


    public function setName(string $name): void
    { 
        $this->name = $name;
        }
    public function setLife(float $life): void {
        $this->life = $life; 
    }
    public function setMana(float $mana): void 
    { 
        $this->mana = $mana; 
    }
    public function setStrength(float $strength): void 
    {
        $this->strength = $strength; 
    }

  
    public function describe(): string
    {
        return "Name: {$this->name}<br>" .
               "Life: {$this->life}<br>" .
               "Mana: {$this->mana}<br>" .
               "Strength: {$this->strength}<br>";
    }
}