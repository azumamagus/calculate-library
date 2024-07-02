<?php

use Azumamagus\Calculo\Sum;

it('should return a 7 value', function(){


    $sum = new Sum(4.00,3.00);
    $result = $sum->result();

    expect($result)->toBe(7.00);
});
