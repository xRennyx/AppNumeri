<?php
class DatabaseCon
{
    private static PDO $db;
    public static function getDB(array $dbconfig):PDO
    {
        if(!isset(self::$db))
        {
            try {
                self:: $db = new PDO($dbconfig['dsn'], $dbconfig['username'], $dbconfig['password'], $dbconfig['options']);
            }catch (PDOException $e){
                return self::$db=null;
            }
        }
        return self::$db;
    }
}
