<?php 

spl_autoload_register(
    function ($namespace){ //ex.: Model\User
        $filename = $namespace . '.php'; //convert to file name: ex.: Model\User.php
        $filename = str_replace('\\', DIRECTORY_SEPARATOR, $filename); //ex.: Model/User.php
        $filename = __DIR__.DIRECTORY_SEPARATOR.$filename; //ex.: C:\Users\Etudiant\Documents\wf\OOP\Exercice3\src/Model/User.php
        
        if (is_file($filename)){
            require_once $filename;
        }
    }
);

use Model\Role;
use Model\User;
use Model\Person;

$user = new User();
$role = new Role(Role::ROLE_USER);

$user->setPassword("myPassword")
    ->setRoles([$role])
    ->setUsername("myUsername")
    ->getSalt("mySalt");

$person = new Person();
$person->setFirstname("Eric")
        ->setEmails(["eric.montecalvo@example.org"])
        ->getLastname("Montecalvo");