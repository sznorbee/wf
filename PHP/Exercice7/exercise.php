<?php

//create a function with two parameter
function divide(int $number, $divisor ){
    
    //If the divisor is zero, you must throw a RuntimeException.
    if ($divisor == 0){
        throw new RuntimeException("Division by 0 is not allowed");
    }
    return $number / $divisor;
}


//second function called "arrayDivide"
function arrayDivide(array $array, $divisor){
    
    // divison on each value of the git aarray
    foreach ($array as $value) {
        //catch the err.
        
        try {
            $result[] = divide($value, $divisor);
        }catch (RuntimeException $catcher){
            $result = $value;
        }
       
    }
    return $result;
};



