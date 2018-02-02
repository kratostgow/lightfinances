<?php
require 'connectDb.php';
require 'check.php';

// Define valores recebidos
$id = $_GET['id'];

// Seleciona a table users
$query = "DELETE FROM despesas WHERE id = $id";
$result = mysqli_query($Conn, $query);
header("location: /admin/despesas.php");
mysqli_close($Conn);
