<?php
require 'connectDb.php';

// Define valores recebidos
$id = $_POST['id'];
$content = $_POST['content'];
$link = $_POST['link'];

// Seleciona a table users
$query = "UPDATE menus SET content='$content', link='$link' WHERE id = {$id}";
$result = mysqli_query($Conn, $query);
header("location: /admin/def.php");
mysqli_close($Conn);
