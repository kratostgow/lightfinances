<?php
require 'connectDb.php';

// Define valores recebidos
$id = $_POST['id'];
$categoria = $_POST['categoria'];

// Seleciona a table users
$query = "UPDATE categoriasR SET categoria='$categoria' WHERE id = {$id}";
$result = mysqli_query($Conn, $query);
header("location: /admin/def.php");
mysqli_close($Conn);
