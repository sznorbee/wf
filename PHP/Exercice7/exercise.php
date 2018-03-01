<?php

//create a function with two parameter
function divide($number, $divisor ){
    
    if ($divisor == 0){
        throw new RuntimeException("Divison by 0!!!");
    }
    return $result = $number / $divisor;
}

function arrayDivide($array, $divisor){
    
    if ($divisor == 0){
        throw new RuntimeException("Divison by 0!!!");
    } 
}

try {
    arrayDivide($value, 0);
}catch (RuntimeException $catcher){
    return $value;
}
