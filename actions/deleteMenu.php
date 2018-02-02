<?php
require 'connectDb.php';
require 'check.php';

// Define valores recebidos
$id = $_GET['id'];

// Seleciona a table users
$query = "DELETE FROM menus WHERE id = $id";
$result = mysqli_query($Conn, $query);
header("location: /admin/def.php");
mysqli_close($Conn);
