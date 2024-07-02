<?php

namespace Azumamagus\Calculo;

class Substract
{
    
    public function __construct(
        private float $a,
        private float $b
    ) { }
    
    public function result():float 
    {
        return $this->a - $this->b;
    }
}
