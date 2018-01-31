<?php
require 'connectDb.php';

// Define valores recebidos
$nome = $_POST['nome'];
$icone = $_POST['icone'];
$extContent = $_POST['extContent'];
$created = date('d-m-Y');

// Seleciona a table users
$query = "INSERT INTO defTabs (name, icon, extContent, created) VALUES ('$nome', '$icone', '$extContent', '$created')";
$result = mysqli_query($Conn, $query);
header("location: /admin/def.php#3");
mysqli_close($Conn);
