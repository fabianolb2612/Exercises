<?php

namespace source\Models\Math;

class Bhaskara
{
    private float $a;
    private float $b;
    private float $c;
    private float $discriminant;
    private ?float $root1;
    private ?float $root2;

    public function __construct(float $a, float $b, float $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
 
    public function getA(): float 
    { 
        return $this->a;
    }
    public function getB(): float 
    { 
        return $this->b; 
    }
    public function getC(): float 
    { 
        return $this->c; 
    }

 
    public function setA(float $a): void 
    { 
        $this->a = $a; 
    }
    public function setB(float $b): void 
    { 
        $this->b = $b; 
    }
    public function setC(float $c): void 
    { 
        $this->c = $c; 
    }

   public function calculate(): void 
   {
    $this->discriminant = $this->b**2 - (4* $this->a * $this->c);
    if ($this->discriminant < 0) 
    {
        $this->root1 = null;
        $this->root2 = null;
    }elseif($this->discriminant == 0)
    {
        $root = -$this->b / (2 * $this->a);
        $this->root1 = $root;
        $this->root2 = $root;
    }
    else {
            $sqrtDelta = sqrt($this->discriminant);
            $this->root1 = (-$this->b + $sqrtDelta) / (2 * $this->a);
            $this->root2 = (-$this->b - $sqrtDelta) / (2 * $this->a);
        }
   }
   public function show(): string
{
    if ($this->root1 === null && $this->root2 === null) {
        return "Fórmula de Báskara (Bhaskara's Formula)<br>" .
            "Coeficiente a: {$this->a}<br>" .
            "Coeficiente b: {$this->b}<br>" .
            "Coeficiente c: {$this->c}<br>" .
            "Discriminante (Δ): {$this->discriminant}<br>" .
            "A equação não possui raízes reais.<br><br>";
    }

    return "Fórmula de Báskara (Bhaskara's Formula)<br>" .
        "Coeficiente a: {$this->a}<br>" .
        "Coeficiente b: {$this->b}<br>" .
        "Coeficiente c: {$this->c}<br>" .
        "Discriminante (Δ): {$this->discriminant}<br>" .
        "Raiz 1 (x₁): {$this->root1}<br>" .
        "Raiz 2 (x₂): {$this->root2}<br><br>";
}
   }