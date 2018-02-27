<?php
$password;
$salt;

$middlePasswordLength = ceil((strlen($password))/2); //5/2= 2.5 the position at insert celi to have an integer 3

//to have the second half of password
$lastHalfPassword = substr($password, $middlePasswordLength);

//first part + salt = replace the last part with the salt
$firstPartPlusSalt = str_replace($lastHalfPassword, $salt, $password);

//concatinaite the firstpart plus salt with the last part
$saltedPassword = $firstPartPlusSalt.$lastHalfPassword;

echo $saltedPassword;