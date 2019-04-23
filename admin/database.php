<?php

class Database
{
    private static $dbHost = "iutdoua-web.univ-lyon1.fr";
    private static $dbName = "p1501076";
    private static $dbUsername = "p1501076";
    private static $dbUserpassword = "239646";
    
    private static $connection = null;
    
    public static function connect()
    {
        if(self::$connection == null)
        {
            try
            {
              self::$connection = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName , self::$dbUsername, self::$dbUserpassword);
            }
            catch(PDOException $e)
            {
                die($e->getMessage());
            }
        }
        return self::$connection;
    }
    
    public static function disconnect()
    {
        self::$connection = null;
    }

}
?>
