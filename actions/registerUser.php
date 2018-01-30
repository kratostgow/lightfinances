<?php
require 'connectDb.php';

$hasAlert = false;

// Define valores recebidos
$nome = $_POST['nome'];
$email = $_POST['email'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$tipo = $_POST['tipo'];

// Seleciona a table users
$query = "INSERT INTO users (nome, login, senha, tipo, email) VALUES ('$nome', '$login', '$senha', '$tipo', '$email')";
mysqli_query($Conn, $query);
if ($_POST['adminArea'] == 1) {
  $hasAlert = true;
  $alertType = 'success';
  $alertMsg = "$nome foi inserido com sucesso.";
  header("location: /admin/def.php?alertMsg=".$alertMsg."&alertType=".$alertType."&hasAlert=".$hasAlert);
  $hasAlert = false;
} else {
  $hasAlert = true;
  $alertType = 'success';
  $alertMsg = "Bem vindo $nome, informe seu login e senha para logar-se no sistema.";
  header("location: /index.php?alertMsg=".$alertMsg."&alertType=".$alertType."&hasAlert=".$hasAlert);
  $hasAlert = false;
}
mysqli_close();
