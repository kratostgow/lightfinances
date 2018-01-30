<?php
require 'connectDb.php';

// Define valores recebidos
$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$tipo = $_POST['tipo'];

// Seleciona a table users
$query = "UPDATE users SET nome='$nome', email='$email', login='$login', senha='$senha', tipo='$tipo' WHERE id = {$id}";
$result = mysqli_query($Conn, $query);
header("location: /admin/def.php");
mysqli_close($Conn);
