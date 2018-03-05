<?php 

spl_autoload_register(
    function ($namespace){ //ex.: Model\User
        $filename = $namespace . '.php'; //ex.: Model\User.php
        $filename = str_replace('\\', DIRECTORY_SEPARATOR, $filename); //ex.: Model/User.php
        $filename = __DIR__.$filename; //ex.: C:\Users\Etudiant\Documents\wf\OOP\Exercice3\src/Model/User.php
        
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
    ->getSalt("mySalt")
    ->setUsername("myUsername");

$person = new Person();
$person->setFirstname("Eric")
        ->getLastname("Montecalvo")
        ->setEmails(["eric.montecalvo@example.org"]);