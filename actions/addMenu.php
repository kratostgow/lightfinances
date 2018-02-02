<?php
require 'connectDb.php';

// Define valores recebidos
$content = $_POST['content'];
$link = $_POST['link'];

// Seleciona a table users
$query = "INSERT INTO menus (content, link) VALUES ('$content', '$link')";
$result = mysqli_query($Conn, $query);
header("location: /admin/def.php");
mysqli_close($Conn);
