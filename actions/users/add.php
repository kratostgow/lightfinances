<?php

$hasAlert = false;

// Define valores recebidos
$nome = $_POST['nome'];
$email = $_POST['email'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$tipo = $_POST['tipo'];

// Seleciona a table users
$sql = "INSERT INTO users (nome, login, senha, tipo, email) VALUES ('$nome', '$login', '$senha', '$tipo', '$email')";
Db::query($sql);
