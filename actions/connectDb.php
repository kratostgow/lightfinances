<?php
// MYSQL
$Username = 'root';
$Pass = 'rgc21thm85';
$db = 'lightfinances';
$Host = 'localhost';

// Connection

// $Conn = new mysqli($Host, $Username, $Pass, $db);
$Conn = new PDO("mysql:host=$Host;dbname=$db", "$Username", "$Pass");

// if ($Conn->connect_errno) {
//     'Erro ao se conectar ao Banco de dados';
// }
