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

    public static function lastId()
    {
        return self::$conn->lastInsertId();
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

    public static function insert($tabela, $data, $returnQuery = false)
    {
        $campos = "";
		$valores = "";
		$bind = array();
		foreach($data AS $campo=>$valor) {
			if (strlen($campos) > 0) {
				$campos.=",";
            }
			$campos.="`$campo`";
			if (strlen($valores) > 0) {
				$valores.=",";
            }
			$valores.=":$campo";
			$bind[":".$campo] = $valor;
		}
		$sql = "INSERT INTO `$tabela` ($campos) VALUES ($valores)";
		if ($returnQuery) {
			return "(" . $valores . ")";
		} else {
			$query = self::query($sql, $bind);
			if (self::$conn->lastInsertId()) {
				return self::$conn->lastInsertId();
			} else {
				return true;//quando a tabela não possui um campo id
			}
		}
    }

    public static function update($tabela, $data, $where, $whereBind)
	{

		$fields = "";
		$bind = array();

		foreach($data AS $campo=>$valor)
		{
			if(strlen($fields) > 0)
				$fields.= ", ";
			$fields.= "$campo = :{$campo}";
			$bind[":" . $campo] = $valor;

		}
		$WHERE = "";
		if ($where) {
			$WHERE = " WHERE " . $where;
			$bind = array_merge($bind, $whereBind);
		}
		$sql = "UPDATE $tabela SET $fields".$WHERE;
		$query = self::query($sql, $bind);
		if($query) {
			return true;
		} else {
			return false;
		}

	}

    public static function delete($tabela, $where, $whereBind)
	{
		$sql = "DELETE FROM $tabela WHERE $where";
		$query = self::query($sql, $whereBind);
		if($query) {
			return true;
		} else {
			return false;
		}
	}

    public static function fetchOne($sql, $bind = array())
	{
		$query = self::query($sql, $bind);
		$r =  $query->fetch();

		if ($r) {
            return $r[0];
        } else {
		    return null;
        }
	}

}

 ?>
