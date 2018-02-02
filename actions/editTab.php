<?php
require 'connectDb.php';

// Define valores recebidos
$id = $_POST['id'];
$name = $_POST['name'];
$icon = $_POST['icon'];
$extContent = $_POST['extContent'];

// Seleciona a table users
$query = "UPDATE defTabs SET name='$name', icon='$icon', extContent='$extContent' WHERE id = {$id}";
$result = mysqli_query($Conn, $query);
header("location: /admin/def.php");
mysqli_close($Conn);
