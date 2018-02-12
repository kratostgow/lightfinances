<?php

// Define valores recebidos
$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$tipo = $_POST['tipo'];

$Users = Model::load('users');
$Users->update(array('nome'=> $nome, 'email'=> $email, 'login'=> $login, 'senha'=> $senha, 'tipo'=> $tipo), "id = :id", array('id'=> $id));
header("location: /admin/def.php");
