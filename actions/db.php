<?php

class Db {
    public static $username = 'root';
    public static $pass = 'rgc21thm85';
    public static $db = 'lightfinances';
    public static $host = 'localhost';

    public static $conn = null;

    public static function connect()
    {
        self::$conn = new PDO(("mysql:host=" . self::$host . ";dbname=" . self::$db), self::$username, self::$pass);
        if (self::$conn) {
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
    }

    public static function query($sql, $bind = array())
    {
        if (!self::$conn) {
            self::connect();
        }
        $stmt = self::$conn->prepare($sql);
        try {
            $stmt->execute($bind);
            return $stmt;
        } catch (Exception $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public static function fetchAll($sql, $bind = array())
    {
        $query = self::query($sql, $bind);
        if ($query) {
            $result = array();
            while($row = $query->fetch(PDO::FETCH_OBJ)) {
              $result[] = $row;
            }
            return $result;
        } else {
            return false;
        }
    }

    public static function fetchRow($sql, $bind = array())
    {
        $query = self::query($sql, $bind);
        if ($query) {
            return $row = $query->fetch(PDO::FETCH_OBJ);
        } else {
            return false;
        }
    }
}

 ?>
