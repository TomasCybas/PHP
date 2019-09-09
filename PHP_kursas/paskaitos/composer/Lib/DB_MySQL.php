<?php

namespace Lib;
require_once "config.php";


class DB_MySQL {
    public static $conn = null;

    public static function connect(){
        self::$conn=new \mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
        self::$conn->set_charset('utf8');
    }

    public static function getTable($sql){
        if(self::$conn==null) self::connect();
        $result = self::$conn->query($sql);
        if(self::$conn->errno!= 0) echo "MySQL klaida: ".self::$conn->error;
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public static function getRow($sql){
        if(self::$conn==null) self::connect();
        $result = self::$conn->query($sql);
        if(self::$conn->errno!= 0) echo "MySQL klaida: ".self::$conn->error;
        return $result->fetch_assoc();
    }

    public static function query($sql){
        if(self::$conn==null) self::connect();
        self::$conn->query($sql);
        if(self::$conn->errno!= 0) echo "MySQL klaida: ".self::$conn->error;

    }

}
