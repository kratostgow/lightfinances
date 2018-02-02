<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require 'actions/db.php';
Db::connect();
$sql = "SELECT * FROM Teste WHERE id = :id";
$teste = Db::fetchAll($sql, array('id' => 2));
$teste2 = Db::fetchRow($sql, array('id' => 2));
var_dump($teste);
var_dump($teste2);
?>
