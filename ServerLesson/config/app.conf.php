<?php
//create a configuration file in config folder:
//an array with the following: mysql:host=localhost;dbname=register', 'root'
return [
    'db' => [
        'driver' => 'mysql',
        'host' => 'localhost',
        'dbname' => 'register',
        'dbuser' => 'root',
        'dbpass' => null
    ]
];