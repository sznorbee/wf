<?php
namespace Service;

class DBConnector
{
    private static $config;
    private static $connection;
    

    public static function setConfig(array $config){
        self::$config = $config;
    }
    
    //'mysql:host=localhost;dbname=register', 'root'
    private static function createConnection(){
                //"mysql:host=localhost;dbname=register",
        //$dns = "\"$config['driver'].':'.'host='.$config['host'].';'.'dbname='.$congig['dbname']\".",".\"$config['dbuser']\"";
        
        $dsn = sprintf(
            '%s:host=%s;dbname=%s',
            self::$config['driver'],
            self::$config['host'],
            self::$config['dbname']
        );
        
        self::$connection = new \PDO(
            $dsn,
            self::$config['dbuser'],
            self::$config['dbpass']
        );
    }
    
    public static function getConnection(){
        if (!self::$connection){
            self::createConnection();
        }
        return self::$connection;
    }

}