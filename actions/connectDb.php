<?php
// MYSQL
$Username = 'root';
$Pass = 'mysql';
$db = 'lightfinances';
$Host = 'localhost';

// Connection

$Conn = new mysqli($Host, $Username, $Pass, $db);

if ($Conn->connect_errno) {
    'Erro ao se conectar ao Banco de dados';
}
