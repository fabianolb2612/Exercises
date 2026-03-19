<?php

namespace source\Models\Math;

class PythagoreanTheorem
{
    private float $cathetusA;
    private float $cathetusB;
    private float $hypotenuse;

    public function __construct(float $cathetusA, float $cathetusB)
    {
        $this->cathetusA = $cathetusA;
        $this->cathetusB = $cathetusB;
    }


    public function getCathetusA(): float
    {
        return $this->cathetusA;
    }

    public function getCathetusB(): float
    {
        return $this->cathetusB;
    }

    public function getHypotenuse(): float
    {
        return $this->hypotenuse;
    }


    public function setCathetusA(float $cathetusA): void
    {
        $this->cathetusA = $cathetusA;
    }

    public function setCathetusB(float $cathetusB): void
    {
        $this->cathetusB = $cathetusB;
    }

    public function calculate(): void
    {
        $this->hypotenuse = sqrt($this->cathetusA**2 + $this->cathetusB**2);
    }
    public function show(): string
    {
        return"Teorema de Pitágoras (Pythagorean Theorem) " . "<br>" .
            "Cateto a (Cathetus a): {$this->cathetusA}" . "<br>" .
            "Cateto b (Cathetus b): {$this->cathetusB}" . "<br>" .
            "Hipotenusa (Hypotenuse): {$this->hypotenuse}" . "<br>"."<br>";
    }
}