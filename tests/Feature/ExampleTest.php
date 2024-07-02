<?php

use Azumamagus\Calculo\Sum;
use Azumamagus\Calculo\Substract;

it('should return a 7 value', function(){


    $sum = new Sum(4.00,3.00);
    $result = $sum->result();

    expect($result)->toBe(7.00);
});

it('should return a 0 value', function(){


    $sum = new Substract(4.00,4.00);
    $result = $sum->result();

    expect($result)->toBe(0.00);
});

