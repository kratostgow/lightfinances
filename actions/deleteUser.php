<?php
require 'connectDb.php';
require 'check.php';

$hasAlert = false;

// Define valores recebidos
$id = $_GET['id'];

// Seleciona a table users
$query = "DELETE FROM users WHERE id = $id";
$result = mysqli_query($Conn, $query);
if ($result) {
  $hasAlert = true;
  $alertType = 'success';
  $alertMsg = "Usuario removido com sucesso.";
  header("location: /admin/def.php?alertMsg=".$alertMsg."&alertType=".$alertType."&hasAlert=".$hasAlert);
  $hasAlert = false;
} else {
  $hasAlert = true;
  $alertType = 'danger';
  $alertMsg = "Erro";
  header("location: /admin/def.php?alertMsg=".$alertMsg."&alertType=".$alertType."&hasAlert=".$hasAlert);
  $hasAlert = false;
}
mysqli_close();
