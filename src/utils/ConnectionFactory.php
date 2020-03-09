<?php

    class ConnectionFactory {

    private static $host = "127.0.0.1";
    private static $db = "cherobim";
    private static $db_user = "root";
    private static $db_password = "cherobim";
    
    private static $con = null;

    public static function getConnection() {

        if (is_null(self::$con)) {
            self::$con = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$db ."", 
                    self::$db_user, 
                   self:: $db_password);

                return self::$con;
        }
            return self::$con;

    }

}





?>