<?php
require 'connectDb.php';

// Define valores recebidos
$categoria = $_POST['categoria'];

// Seleciona a table users
$query = "INSERT INTO categorias (categoria) VALUES ('$categoria')";
$result = mysqli_query($Conn, $query);
header("location: /admin/def.php#1004");
mysqli_close($Conn);
